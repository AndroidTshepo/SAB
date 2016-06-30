$(document).ready(function () {
    // This Hides the forgot password form
    $("#forgot").hide();



    // Toggles the forgot password when the forgot password is clicked & append the value of the username control from login to forgot password form
    $("#forgot_pass").on('click', function (e) {
        e.preventDefault()
        $("#forgot").toggle(function () {
            $('#reset-email').val($('#username').val());
        });
    });

// Validate the password and forgot password to check if they are equal or not
    var password = document.getElementById("pass")
        , confirm_password = document.getElementById("pconfirm");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords that you have entered doesn't match!");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;


});
