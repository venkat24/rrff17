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
            $('#movie-link').val(data.message.movie_link);
            if(data.message.poster_submitted == '1') {
                $('#poster-image-container').append('<img src="/api/getposter" width="300px">');
            }
		} else {
			alert('Fetch Failed');
            console.log(data.message);
		}
	});
}

function setTitle() {
    $('#title-submit').prop("disabled",true);
    $('#title-submit').removeClass('button-primary');
    $('#title-submit').addClass('button');
	var route = '/api/settitle';
	var method = 'POST';

    var request = $.ajax({
        url: route,
        type: method,
        data: {
            'title' : $('#title').val()
        }
    });

	request.done(function(data){
		$('#title-submit').prop("disabled",false);
        $('#title-submit').removeClass('button');
        $('#title-submit').addClass('button-primary');
		if(data.status_code == 200) {
            alert('Title Set Successfully');
		} else {
			alert('Title Set Failed');
            console.log(data.message);
		}
	});
}

function setSynopsis() {
    $('#synopsis-submit').prop("disabled",true);
    $('#synopsis-submit').removeClass('button-primary');
    $('#synopsis-submit').addClass('button');
	var route = '/api/setsynopsis';
	var method = 'POST';

    var request = $.ajax({
        url: route,
        type: method,
        data: {
            'synopsis' : $('#synopsis').val()
        }
    });

	request.done(function(data){
		$('#synopsis-submit').prop("disabled",false);
        $('#synopsis-submit').removeClass('button');
        $('#synopsis-submit').addClass('button-primary');
		if(data.status_code == 200) {
            alert('Synopsis Set Successfully');
		} else {
			alert('Synopsis Set Failed');
            console.log(data.message);
		}
	});
}

function setMovieLink() {
    $('#movie-link-submit').prop("disabled",true);
    $('#movie-link-submit').removeClass('button-primary');
    $('#movie-link-submit').addClass('button');
	var route = '/api/setmovielink';
	var method = 'POST';

    var request = $.ajax({
        url: route,
        type: method,
        data: {
            'movie_link' : $('#movie-link').val()
        }
    });

	request.done(function(data){
		$('#movie-link-submit').prop("disabled",false);
        $('#movie-link-submit').removeClass('button');
        $('#movie-link-submit').addClass('button-primary');
		if(data.status_code == 200) {
            alert('Movie Link Set Successfully');
		} else {
			alert('Movie Link Set Failed');
            console.log(data.message);
		}
	});
}
