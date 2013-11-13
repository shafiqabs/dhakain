$(document).ready(function() {
			
			$(".carousel").dualSlider({
				auto:true,
				autoDelay: 6000,
				easingCarousel: "swing",
				easingDetails: "easeOutBack",
				durationCarousel: 1000,
				durationDetails: 600
			});
			
});


/**
 * We use the initCallback callback
 * to assign functionality to the controls
 */
function mycarousel_initCallback1(carousel) {
    jQuery('.jcarousel-control a').bind('click', function() {
    	//alert("Test page");
		carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });

    jQuery('.mycarousel-next').bind('click', function() {
		//alert("Test next");
		carousel.next();
        return false;
    });

    jQuery('.mycarousel-prev').bind('click', function() {
        //alert("Test prev");
		carousel.prev();
        return false;
    });
};

// Ride the carousel...
jQuery(document).ready(function() {
    jQuery(".jcarousel-skin-product").jcarousel({
        scroll: 1,
        initCallback: mycarousel_initCallback1,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null
    });
});




function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        wrap: 'circular',
		scroll: 1,
		animation:'slow',
		auto:true,
        initCallback: mycarousel_initCallback
    });
});