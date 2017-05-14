$(document).ready(function(){
    getSubmissionStatus();
});

function returnMark(isSubmitted) {
	if(isSubmitted == '1') {
		return '✔';
	}
	return '✘';
}

function setMark(identifier, message) {
	$('#'+identifier).html(returnMark(message[identifier]));
	if(message[identifier] == '1') {
		$('#'+identifier).css('color','#20cA4B');
	} else {
		$('#'+identifier).css('color','#FF5555');
	}
}

function getSubmissionStatus() {
	var route = '/api/getsubmissionstatus';
	var method = 'GET';

	var request = $.ajax({
		url: route,
		type: method,
	});

	request.done(function(data){
		$('#login_button').prop("disabled",false);
		if(data.status_code == 200) {
            setMark('poster_submitted',data.message);
            setMark('synopsis_submitted',data.message);
            setMark('payment_submitted',data.message);
            setMark('movie_submitted',data.message);
            setMark('title_submitted',data.message);
            $('#synopsis').val(data.message.synopsis);
            $('#title').val(data.message.title);
            if(data.message.poster_submitted == '1') {
                $('#poster-image-container').append('<img src="/api/getposter" width="300px">');
            }
		} else {
			alert('Fetch Failed');
            console.log(data.message);
		}
	});
}
