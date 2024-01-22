function loadEvents(direction) {
    var container = $('.slider-container-events');
    var currentCount = container.find('.e-slidediv1').length;

    jQuery.ajax({
        url: frontendajax.ajaxurl,
        type: 'post',
        data: {
            action: 'load_events',
            direction: direction,
            currentCount: currentCount
        },
        success: function (response) {
            if (response.indexOf('No more events found') === -1 && response.split('<div class="e-slidediv1">').length > 1) {
              

                if (direction === 'prev') {
                    container.html(response);
                } else {
                    container.append(response); 
                }

            }
        },
        error: function (errorThrown) {
            console.log(errorThrown);
        }
    });
}
