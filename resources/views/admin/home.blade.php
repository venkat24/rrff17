@extends('admin.base')

@section('main')
	<br />
	<div class="container">
		<div class="valgn-wrapper" >
			<ul class="collapsible popout" data-collapsible="accordion">
                @foreach ($submissions as $submission)
                <li>
                  <div class="collapsible-header">{{$submission->user_id}}</div>
                  <div class="collapsible-body row"><p>
                    <div class="col s4 center-align">{{$submission->poster_submitted}}</div>
                    <div class="col s4 center-align">{{$submission->movie_submitted}}</div>
                    <div class="col s4 center-align">{{$submission->payment_submitted}}</div>
                  </p></div>
                </li>
                @endforeach
			</ul>
		</div>
	</div>
<script type="text/javascript" src="/js/admin_home.js"></script>
@endsection
