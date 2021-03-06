$(document).ready(function(){
    initMat();
});

function initMat() {
	$('.collapsible').collapsible({
      accordion : false
    });
}

function setMovieStatus(user_id) {
    if($('#movie_'+user_id).prop('checked')) 
        var movie_status = 1;
    else
        var movie_status = 0;

    var route = '/api/setmoviestatus';
    var method = 'POST';

    var request = $.ajax({
        url: route,
        type: method,
        data: {
            'movie_status' : movie_status,
            'user_id' : user_id
        }
    });

    request.done(function(data){
        if(data.status_code == 200) {
            Materialize.toast('Movie status set successfully', 4000);
        } else {
            alert('Set Failed');
            console.log(data.message);
        }
    });
}
function setPaymentStatus(user_id) {
    if($('#payment_'+user_id).prop('checked'))
        var payment_status = 1;
    else
        var payment_status = 0;

    var route = '/api/setpaymentstatus';
    var method = 'POST';

    var request = $.ajax({
        url: route,
        type: method,
        data: {
            'payment_status' : payment_status,
            'user_id' : user_id
        }
    });

    request.done(function(data){
        if(data.status_code == 200) {
            Materialize.toast('Payment status set successfully', 4000);
        } else {
            alert('Set Failed');
            console.log(data.message);
        }
    });
}
