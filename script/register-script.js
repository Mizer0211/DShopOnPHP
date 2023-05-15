$('body').on('click', '.password-control', function(){
    if($('#register-password').attr('type') == 'password'){
        $(this).addClass('view');
        $('#register-password').attr('type', 'text');
    } else {
        $(this).removeClass('view');
        $('#register-password').attr('type', 'password');
    }
    return false;
})