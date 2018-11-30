$(document).ready(function() {
    $('#contact_us').click(function(event) {
        $(".error_span").empty();
        $('.form-group').removeClass('has-error');
        $('.help-block').remove();
        var formData = {
            'name_co': $('input[name=name_co]').val(),
            'email_co': $('input[name=email_co]').val(),
            'mobile': $('input[name=mobile]').val(),
            'comments_co': $('textarea[name=comments_co]').val(),
            'value_num': $('input[name=value_num_contact]').val(),
            'captcha_num_hidden': $('input[name=captcha_num_hidden_contact]').val(),
        };
        $('#load_con').show();
        $('#contact_us').hide();
        $.ajax({
            type: 'POST',
            url: 'contact_mail.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function(data) {
            if (!data.success) {
                $('#load_con').hide();
                $('#contact_us').show();
                if (data.errors.name_co) {
                    $('#user_name_error').text(data.errors.name_co);
                }
                if (data.errors.email_co) {
                    $('#email_error').text(data.errors.email_co);
                }
                if (data.errors.mobile) {
                    $('#mobile_error').text(data.errors.mobile);
                }
                if (data.errors.comments_co) {
                    $('#comment_error').text(data.errors.comments_co);
                }
                if (data.errors.value_num) {
                    $('#captcha_error').text(data.errors.value_num);
                }
            } else {
                location.href = 'thank-you.php';
            }
        }).fail(function(data) {
          $('#load_con').hide();
        });
        event.preventDefault();
    });
});