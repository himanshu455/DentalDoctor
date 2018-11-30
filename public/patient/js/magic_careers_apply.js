$(document).ready(function() {
    $('#career').ajaxForm(function() {
        $('#success_career').append('<div class="alert alert-success">Your Query has been successfully submit. We will contact you very soon!!</div>');
        document.getElementById("career").reset();
        $('#load_career').hide();
        $('#sub_yy').show();
        $(".alert-success").delay(4000).fadeOut("slow");
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateText(str){
	 var re = /^[a-z\d\-_\s]+$/i;
	 return re.test(str);
}


function validate_career_apply_form() {
    var alpha_spaces_regex = /^[a-zA-Z][a-zA-Z ]*$/;
    var phone_no_regex = /\+?\d[\d -]{8,12}\d/;
    var form_has_errors = 0;
    var career_name = $('#career_name').val();
    var career_name_error = $('#career_name_error');
    var career_name_div = $('#career_name_div');
    var career_email = $('#career_email').val();
    var career_email_error = $('#career_email_error');
    var career_email_div = $('#career_email_div');
    var career_contact_no = $('#career_contact_no').val();
    var career_contact_no_error = $('#career_contact_no_error');
    var career_contact_no_div = $('#career_contact_no_div');
    var career_educational_qualifications = $('#career_educational_qualifications').val();
    var career_educational_qualifications_error = $('#career_educational_qualifications_error');
    var career_educational_qualifications_div = $('#career_educational_qualifications_div');
    var career_professional_qualifications = $('#career_professional_qualifications').val();
    var career_professional_qualifications_error = $('#career_professional_qualifications_error');
    var career_professional_qualifications_div = $('#career_professional_qualifications_div');
    var career_work_experience = $('#career_work_experience').val();
    var career_work_experience_error = $('#career_work_experience_error');
    var career_work_experience_div = $('#career_work_experience_div');
    var career_expected_salary = $('#career_expected_salary').val();
    var career_expected_salary_error = $('#career_expected_salary_error');
    var career_expected_salary_div = $('#career_expected_salary_div');
    var value_num_car = $('#value_num_car').val();
    var value_num_car_error = $('#value_num_car_error');
    var value_num_car_div = $('#value_num_car_div');
    var captcha_num_hidden_car = $('#captcha_num_hidden_car').val();
    var file_attached = $('#file_attached').val();
    var file_attached_error = $('#file_attached_error');
    var career_position_applied = $('#career_position_applied').val();
    var career_position_applied_no_error = $('#career_position_applied_no_error');
    if (career_name == '') {
        career_name_error.text('Name is required.');
        form_has_errors++;
    } else if(!alpha_spaces_regex.test(career_name)) {
        career_name_error.text('Enter a valid name.');
        form_has_errors++;
    }  else {
        career_name_error.text('');
    }
    if (career_position_applied == '') {
        career_position_applied_no_error.text('Position is required.');
        form_has_errors++;
    } else {
        career_position_applied_no_error.text('');
    }
    if(file_attached == ''){
        file_attached_error.text('Resume is required.');
        form_has_errors++;
    }else{
        file_attached_error.text('');
    }
    if (career_email == '') {
        career_email_error.text('Email address is required.');
        career_email_div.addClass('has-error');
        form_has_errors++;
    } else if (!validateEmail(career_email)) {
        career_email_error.text('Enter a valid email address.');
        career_email_div.addClass('has-error');
        form_has_errors++;
    } else {
        career_email_error.text('');
        career_email_div.removeClass('has-error');
    }
    if (career_contact_no == '') {
        career_contact_no_error.text('Contact no is required.');
        career_contact_no_div.addClass('has-error');
        form_has_errors++;
    }else if(!phone_no_regex.test(career_contact_no)) {
        career_contact_no_error.text('Enter a valid Contact no.');
        form_has_errors++;
    } else {
        career_contact_no_error.text('');
        career_contact_no_div.removeClass('has-error');
    }
    if (career_educational_qualifications == '') {
        career_educational_qualifications_error.text('Educational Qualifications is required.');
        career_educational_qualifications_div.addClass('has-error');
        form_has_errors++;
    } else if (!validateText(career_educational_qualifications)) {
        career_educational_qualifications_error.text('Enter valid education qualification.');
        career_educational_qualifications_div.addClass('has-error');
        form_has_errors++;
    } else {
        career_educational_qualifications_error.text('');
        career_educational_qualifications_div.removeClass('has-error');
    }
    if (career_professional_qualifications == '') {
        career_professional_qualifications_error.text('Professional Qualifications is required.');
        career_professional_qualifications_div.addClass('has-error');
        form_has_errors++;
    }  else if (!validateText(career_professional_qualifications)) {
        career_professional_qualifications_error.text('Enter valid professional qualification.');
        career_professional_qualifications_div.addClass('has-error');
        form_has_errors++;
    } else {
        career_professional_qualifications_error.text('');
        career_professional_qualifications_div.removeClass('has-error');
    }
    if (career_work_experience == '') {
        career_work_experience_error.text('Work Experience is required.');
        career_work_experience_div.addClass('has-error');
        form_has_errors++;
    } else if (!validateText(career_work_experience)) {
        career_work_experience_error.text('Enter valid work experience.');
        career_work_experience_div.addClass('has-error');
        form_has_errors++;
    } else {
        career_work_experience_error.text('');
        career_work_experience_div.removeClass('has-error');
    }
    if (career_expected_salary == '') {
        career_expected_salary_error.text('Expected Salary is required.');
        career_expected_salary_div.addClass('has-error');
        form_has_errors++;
    } else {
        career_expected_salary_error.text('');
        career_expected_salary_div.removeClass('has-error');
    }
    if (value_num_car != captcha_num_hidden_car) {
        value_num_car_error.text('Incorrect Human Test Answer.');
        value_num_car_div.addClass('has-error');
        form_has_errors++;
    } else {
        value_num_car_error.text('');
        value_num_car_div.removeClass('has-error');
    }
    if (form_has_errors) {
        return false;
    } else {
        return true;
    }
}