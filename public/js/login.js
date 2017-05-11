$(document).ready(function(){});

function login() {
    $('#submit').prop("disabled",true);
	var email = $('#email').val();
	var password = $('#password').val();

	var route = '/api/login';
	var method = 'POST';

	var request = $.ajax({
        url: route,
		type: method,
		data: { 
			"email" : email,
			"password" : password
		}
	});

	request.done(function(data){
		$('#submit').prop("disabled",false);
		if(data.status_code == 200) {
			location.href = '/dashboard';
		} else {
			alert('Sorry, Login failed.');
			console.log(data);
		}
	});
}
