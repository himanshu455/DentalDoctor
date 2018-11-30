$(document).ready(function() {
    $('#contact_us_quick').click(function(event) {
        $(".error_span").empty();
        $('.form-group').removeClass('has-error');
        $('.help-block').remove();
        var formData = {
            'name_quick': $('input[name=name_quick]').val(),
            'email_quick': $('input[name=email_quick]').val(),
            'mobile_quick': $('input[name=mobile_quick]').val(),
            'comments_quick': $('textarea[name=comments_quick]').val(),
            'value_num_contact_quick': $('input[name=value_num_contact_quick]').val(),
            'captcha_num_hidden_contact_quick': $('input[name=captcha_num_hidden_contact_quick]').val(),
        };
        $('#load_con_quick').show();
        $('#contact_us_quick').hide();
        $.ajax({
            type: 'POST',
            url: 'contact_quick_mail.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function(data) {
            if (!data.success) {
                $('#load_con_quick').hide();
                $('#contact_us_quick').show();
                if (data.errors.name_quick) {
                    $('#user_name_error_quick').text(data.errors.name_quick);
                }
                if (data.errors.email_quick) {
                    $('#email_error_quick').text(data.errors.email_quick);
                }
                if (data.errors.mobile_quick) {
                    $('#mobile_error_quick').text(data.errors.mobile_quick);
                }
                if (data.errors.comments_quick) {
                    $('#comment_error_quick').text(data.errors.comments_quick);
                }
                if (data.errors.value_num_contact_quick) {
                    $('#captcha_error_quick').text(data.errors.value_num_contact_quick);
                }
            } else {
                location.href = 'thank-you.php';
            }
        }).fail(function(data) {
          $('#load_con_quick').hide();
        });
        event.preventDefault();
    });
});