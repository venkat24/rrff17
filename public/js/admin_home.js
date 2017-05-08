$(document).ready(function(){
	//home();
});

function initMat() {
	$('.collapsible').collapsible({
      accordion : false
    });
}

function home() {
	var source = $("#table").html();
	var template = Handlebars.compile(source);

	var route = '/common/getall';
	var method = 'POST';

	var request = $.ajax({
		url: route,
		method: method,
		data: {
		}
	});

	request.done(function(data){
		$('#login_button').prop("disabled",false);
		var info = JSON.parse(data);
		if(info.status_code == 200) {
			var context = info;
			var html = template(context);
			$('body').append(html);
			initMat();
		} else {
			alert('Fetch Failed');
		}
	});
}
