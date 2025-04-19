jQuery(document).ready(function($) {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var formMessage = $('#form-message');

        $.ajax({
            url: zeshanAjax.ajaxurl,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    formMessage.html('<p style="color: green;">' + response.data + '</p>');
                    $('#contact-form')[0].reset();
                } else {
                    formMessage.html('<p style="color: red;">' + response.data + '</p>');
                }
            },
            error: function() {
                formMessage.html('<p style="color: red;">An error occurred. Please try again.</p>');
            }
        });
    });
});