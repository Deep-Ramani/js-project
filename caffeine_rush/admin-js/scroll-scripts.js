function initializeJS() {

    // //tool tips
    // jQuery('.tooltips').tooltip();

    // //popovers
    // jQuery('.popovers').popover();

    //custom scrollbar
        //for html
    jQuery("html").niceScroll({
        styler:"fb",cursorcolor:"#007AFF", 
        cursorwidth: '6', 
        cursorborderradius: '10px', 
        background: '#F7F7F7', 
        cursorborder: '', 
        zindex: '1000'
    });
        //for sidebar
    jQuery("#sidebar").niceScroll({
        styler:"fb",cursorcolor:"#007AFF", 
        cursorwidth: '3', 
        cursorborderradius: '10px', 
        background: '#F7F7F7', 
        cursorborder: ''
    });

    jQuery(".modal").niceScroll({
        styler:"fb",cursorcolor:"#007AFF", 
        cursorwidth: '3', 
        cursorborderradius: '10px', 
        background: '#F7F7F7', 
        cursorborder: ''
    });
        // for scroll panel
    jQuery(".scroll-panel").niceScroll({
        styler:"fb",
        cursorcolor:"#007AFF", 
        cursorwidth: '3', 
        cursorborderradius: '10px', 
        background: '#F7F7F7', 
        cursorborder: ''
    });
    
    //sidebar dropdown menu
    jQuery('#sidebar .sub-menu > a').click(function () {
        var last = jQuery('.sub-menu.open', jQuery('#sidebar'));        
        jQuery('.menu-arrow').removeClass('arrow_carrot-right');
        jQuery('.sub', last).slideUp(200);
        var sub = jQuery(this).next();
        if (sub.is(":visible")) {
            jQuery('.menu-arrow').addClass('arrow_carrot-right');            
            sub.slideUp(200);
        } else {
            jQuery('.menu-arrow').addClass('arrow_carrot-down');            
            sub.slideDown(200);
        }
        // var o = (jQuery(this).offset());
        // diff = 200 - o.top;
        // if(diff>0)
        //     jQuery("#sidebar").scrollTo("-="+Math.abs(diff),500);
        // else
        //     jQuery("#sidebar").scrollTo("+="+Math.abs(diff),500);
    });
    
}

jQuery(document).ready(function(){
    initializeJS();
});