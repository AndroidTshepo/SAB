//Clearing the registration modal text fields after the modal closes
$('#reg').on('show.bs.modal', function () {
    $('#first_name').val("");
    $('#last_name').val("");
    $('#email').val("");
    $("#acc_number").val("");
    $("#pin").val("");
    $("#pass").val("");


});

// Here I clear the text  fields and hide the forgot password form of the login modal when it closes
$('#log').on('show.bs.modal', function () {
    $('#username').val("");
    $('#pass').val("");
    $('#forgot').hide();


});