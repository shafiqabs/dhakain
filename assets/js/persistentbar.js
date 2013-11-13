
function showPersistentBar()
{       
    if (tab == "open")
    {   
        TabClose();
	}
	    else
	{
	    TabOpen("0");
	}	
}

var tab;

function TabOpen(visit){   

    $('persistentBarContent').style.display = 'block';
    if (visit == "1"){
        timer = setTimeout('showPersistentBar()', sBarTimeOut);
    }
    
    tab = "open";
}

function TabClose(){
    clearTimeout(timer);
    $('persistentBarBtn').src = scImageServer + "/images/formatting/persistentBarBtnOpen.gif";
    $('persistentBarContent').innerHTML = '';
    $('persistentBarContent').style.display = 'none';
    tab = "closed";
}

function Remove(slideId, productId) 
{

    var params = "WebPId=" + productId;
    new Ajax.Request( "/cnt/myhsn/RemoveRecentlyViewedItem.aspx", 
                      { method: "get",
                        parameters: params,
                        asynchronous: true,
                        onFailure: function(transport) { document.body.style.cursor = "default"; },
                        onSuccess: function(transport) { document.body.style.cursor = "default"; init("2"); }} );
}

function getResolution()
{
    var height = screen.height;
    var width = screen.width;
    return width + "x" + height;
}