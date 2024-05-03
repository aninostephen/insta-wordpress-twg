jQuery(document).ready(function($) {
    $(document).on('click', '.submit_var_set', function(e){
        e.preventDefault();
        var instaUsername = $('input[name="insta_username"]').val();
        var insta_frequency = $('input[name="insta_frequency"]').val();
        var nonce = $('input[name="save_insta_nonce"]').val();
        var ajax_referer = $('input[name="_wp_http_referer"]').val();
        
        $.ajax({
            type: 'post',
            url: ajaxurl,
            data: {
                action: 'save_insta',
                security: nonce,
                referer: ajax_referer,
                instaUsername: instaUsername,
                insta_frequency: insta_frequency,
            },
            success: function(response) {
                alert(response.data);
            },
            error: function(xhr, status, error) {
                alert('error');
            }
        });
    });
});
