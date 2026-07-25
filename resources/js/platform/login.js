import $ from 'jquery';
import 'jquery-validation';

window.$ = $;
window.jQuery = $;

$(document).ready(function() {
    $('#platformLoginForm').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            email: {
                required: 'Email address is required.',
                email: 'Please enter a valid email address.'
            },
            password: {
                required: 'Password is required.',
                minlength: 'Password must be at least 6 characters.'
            }
        },
        errorElement: 'span',
        errorClass: 'validation-error',
        errorPlacement: function(error, element) {
            let inputGroup = element.closest('.input-group');
            if (inputGroup.length) {
                error.insertAfter(inputGroup);
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element).removeClass('is-invalid');
        }
    });

    $('#platformForgotPasswordForm').validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: 'Email address is required.',
                email: 'Please enter a valid email address.'
            }
        },
        errorElement: 'span',
        errorClass: 'validation-error',
        errorPlacement: function(error, element) {
            let inputGroup = element.closest('.input-group');
            if (inputGroup.length) {
                error.insertAfter(inputGroup);
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element).removeClass('is-invalid');
        }
    });

    $('#showForgotPassword').on('click', function() {
        $('.platform-login-card-wrapper').addClass('is-flipped');
    });
    
    $('#showLogin').on('click', function() {
        $('.platform-login-card-wrapper').removeClass('is-flipped');
    });
});