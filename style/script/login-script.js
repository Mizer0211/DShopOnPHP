$('body').on('click', '.password-control', function(){
    if ($('#login-password').attr('type') == 'password'){
		$(this).addClass('view');
		$('#login-password').attr('type', 'text');
	} else {
		$(this).removeClass('view');
		$('#login-password').attr('type', 'password');
	}
	return false;
});