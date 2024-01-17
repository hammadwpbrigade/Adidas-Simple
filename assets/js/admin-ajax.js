function loadEvents(direction) {
    var container = $('.slider-container-events');
    var currentCount = container.find('.e-slidediv1').length;

    jQuery.ajax({
        url: frontendajax.ajaxurl,  // Use frontendajax.ajaxurl instead of ajaxurl
        type: 'post',
        data: {
            action: 'load_events',
            direction: direction,
            currentCount: currentCount
        },
        success: function(response) {
            if (response) {
                container.html(response);
            }
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
}
