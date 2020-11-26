$('#scroll_up').hide();
$(window).scroll(function() {
    if($(this).scrollTop() > 300)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.opaque-navbar').addClass('opaque');
        
    } else {
        $('.opaque-navbar').removeClass('opaque');
    }
    if($(this).scrollTop()>550){
        $('#scroll_up').show();
    }
    else{
        $('#scroll_up').hide();
    }
});