$(document).ready(function () {
    // Here I get the and sent the values of the controls for registration
    $("#form").submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: $("#form").attr("method"),
            url: $("#form").attr("action"),
            data: $("#form").serialize(),
            success: function (data) {
                $("#error").html(data);

            }
        });
    });
    //login
    $("#form-login").submit(function () {
        $.ajax({
            type: $("#form-login").attr("method"),
            url: $("#form-login").attr("action"),
            data: $("#form-login").serialize(),
            success: function (data) {
                console.log(data);
                $('#log').modal('hide');
            }
        });
    });
    // Here I get the and sent the values of the controls for forgot password
    $("#FP_main").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: $("#FP_main").attr("method"),
            url: $("#FP_main").attr("action"),
            data: $("#FP_main").serialize(),
            success: function (data) {
                $("#fp_msg").html(data);
            }
        });
    })
});
