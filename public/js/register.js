function confirmPassword () {
    var password = $('#password').val();
    var confirm_password = $('#confirm_password').val();
    $('#pwconf').css('display','block');
    if(password == confirm_password) {
        $('#pwconf').html('Passwords Match!');
    } else {
        $('#pwconf').html('Passwords DO NOT Match');
    }
}
