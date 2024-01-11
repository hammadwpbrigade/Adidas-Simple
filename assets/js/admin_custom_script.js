jQuery(document).ready(function($) {
    $('input[name^="slide_content"]').on('input', function() {
        var slideNumber = $(this).attr('name').match(/\d+/)[0];
        var newValue = $(this).val();
        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: {
                action: 'update_slider_option',
                slide_number: slideNumber,
                new_value: newValue
            },
            success: function(response) {
                console.log(response.data); // Do something with the response if needed
            },
            error: function(error) {
                console.log(error.responseText); // Handle errors if any
            }
        });
    });
});
