$(document).ready(function(){jQuery('.add_hover').hover(function(){var imghavor=$(this).attr('alt');$('.'+imghavor+'-img').addClass('hover-inner-display');},function(){$('#hover-inner img').removeClass('hover-inner-display');});$("#clients-inner-button").click(function(){if($('#clients-inner-button').hasClass('clients-inactive-button')){jQuery('.clients-board').animate({right:'-11'});$(this).removeClass('clients-inactive-button').addClass('clients-active-button');}else{jQuery('.clients-board').animate({right:'-330'});$(this).removeClass('clients-active-button').addClass('clients-inactive-button');}});$("#process-inner-button").click(function(){if($('#process-inner-button').hasClass('process-inactive-button')){jQuery('.process-board').animate({left:'-3'});$(this).removeClass('process-inactive-button').addClass('process-active-button');}else{jQuery('.process-board').animate({left:'-200'});$(this).removeClass('process-active-button').addClass('process-inactive-button');}});$("#services-inner-button").click(function(){if($('#services-inner-button').hasClass('services-inactive-button')){jQuery('.services-board').animate({right:'-11'});$(this).removeClass('services-inactive-button').addClass('services-active-button');}else{jQuery('.services-board').animate({right:'-280'});$(this).removeClass('services-active-button').addClass('services-inactive-button');}});$("#experties-inner-button").click(function(){if($('#experties-inner-button').hasClass('experties-inactive-button')){jQuery('.experties-board').animate({left:'-3'});$(this).removeClass('experties-inactive-button').addClass('experties-active-button');}else{jQuery('.experties-board').animate({left:'-360'});$(this).removeClass('experties-active-button').addClass('experties-inactive-button');}});jQuery('.add_hover').click(function(){jQuery('html, body').animate({scrollTop:jQuery(jQuery(this).attr('href')).offset().top- 250},500);return false;});$('img.dealy_load').appear(function(){var loadlate=$(this).attr('id');if(loadlate){$(this).attr('src',loadlate);$(this).removeAttr('id');}});$('.dealy_small').appear(function(){var loadlate=$(this).attr('id');var main_img=new Image(1022,320);var image1=new Image(1022,14);image1.src=$(".dealy_small-1").attr('id');var image2=new Image(1022,25);image2.src=$(".dealy_small-2").attr('id');if(loadlate){main_img.onload=function(){$(".dealy_small")[0].src=main_img.src;$(".dealy_small-1")[0].src=image1.src
    $(".dealy_small-2")[0].src=image2.src}
    main_img.src=loadlate
    $(this).removeAttr('id');}});$('.know-board').appear(function(){var loadlate=$(this).attr('id');if(loadlate){$(this).css('background-image','url('+ loadlate+')');$(this).removeAttr('id');}});$('.mobile-apps').click(function(){$("area[rel^='test']").prettyPhoto();var api_images=['images/mobile-portfolio/1.jpg','images/mobile-portfolio/2.jpg','images/mobile-portfolio/3.jpg','images/mobile-portfolio/4.jpg','images/mobile-portfolio/5.jpg','images/mobile-portfolio/6.jpg','images/mobile-portfolio/7.jpg','images/mobile-portfolio/8.jpg','images/mobile-portfolio/9.jpg'];var api_titles=[];var api_descriptions=[];$.prettyPhoto.open(api_images,api_titles,api_descriptions);});$('.web-portfolio').click(function(){$("area[rel^='test']").prettyPhoto();var api_images=['images/slider/1.jpg','images/slider/2.jpg','images/slider/3.jpg','images/slider/4.jpg','images/slider/5.jpg','images/slider/6.jpg','images/slider/7.jpg'];var api_titles=[];var api_descriptions=[];$.prettyPhoto.open(api_images,api_titles,api_descriptions);});});