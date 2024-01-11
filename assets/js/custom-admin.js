jQuery(document).ready(function($){
    $('.upload-image-button').on('click', function(e) {
        e.preventDefault();

        var button = $(this);
        var imageInput = button.prev('input[type="text"]');

        var imageUploader = wp.media({
            title: 'Upload or Select Image',
            multiple: false
        });

        imageUploader.on('select', function() {
            var attachment = imageUploader.state().get('selection').first().toJSON();
            imageInput.val(attachment.url);
        });

        imageUploader.open();
    });
});

