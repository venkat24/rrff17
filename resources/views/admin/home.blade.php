@extends('admin.base')

@section('main')
	<br />
	<div class="container">
        <h2 style="text-align: center">Registrations</h2>
        <h6 style="text-align: center">{{$tot_count}} Total</h6>
		<div class="valgn-wrapper" >
			<ul class="collapsible popout" data-collapsible="accordion">
                @foreach ($submissions as $submission)
                <li>
                  <div class="collapsible-header" style="clear: both">
                    <p style="font-size:11pt;float:left">{{$count++}} - <em>{{$submission->title}}</em><p>
                    <p style="font-size:11pt;float:right">{{$submission->name}}<p>
                  </div>
                  <div class="collapsible-body row">
                    <div class="col s12" style="margin:0;padding:0;">
                        <p style="padding: 10px 30px;"><strong>Name : </strong>{{$submission->name}}</p>
                        <p style="padding: 10px 30px;"><strong>Film Name : </strong>{{$submission->title}}</p>
                        <p style="padding: 10px 30px;"><strong>Email : </strong>{{$submission->email}}</p>
                        <p style="padding: 10px 30px;"><strong>Phone Number : </strong>{{$submission->phone}}</p>
                        <p style="padding: 10px 30px;"><strong>Movie Link : </strong>{{$submission->movie_link}}</p>
                    </div>
                    @if($submission->poster_submitted)
                    <div class="col s3 center-align">
                        <p>
                          <input type="checkbox" id="poster" checked="checked" disabled="disabled" />
                          <label for="poster">Poster</label>
                        </p>
                    </div>
                    @else
                    <div class="col s3 center-align">
                        <p>
                          <input type="checkbox" id="poster" disabled="disabled" />
                          <label for="poster">Poster</label>
                        </p>
                    </div>
                    @endif
                    @if($submission->synopsis_submitted)
                    <div class="col s3 center-align">
                        <p>
                          <input type="checkbox" id="synopsis" checked="checked" disabled="disabled" />
                          <label for="synopsis">Synopsis</label>
                        </p>
                    </div>
                    @else
                    <div class="col s3 center-align">
                        <p>
                          <input type="checkbox" id="synopsis" disabled="disabled" />
                          <label for="synopsis">Synopsis</label>
                        </p>
                    </div>
                    @endif
                    <div class="col s3 center-align">
                        <p>
                          <input type="checkbox" id="payment_{{$submission->user_id}}" onchange="setPaymentStatus({{$submission->user_id}});return false;"
                        @if($submission->payment_submitted)
                          checked="checked"
                        @endif
                            />
                          <label for="payment_{{$submission->user_id}}">Payment</label>
                        </p>
                    </div>
                    <div class="col s3 center-align">
                        <p>
                          <input type="checkbox" id="movie_{{$submission->user_id}}" onchange="setMovieStatus({{$submission->user_id}});return false;"
                        @if($submission->movie_submitted)
                          checked="checked"
                        @endif
                            />
                          <label for="movie_{{$submission->user_id}}">Movie</label>
                        </p>
                    </div>
                    @if($submission->poster_submitted)
                        <p style="width:100%;text-align:center">
                            <img src="/admin/getposter?user_id={{$submission->user_id}}" width="80%">
                        </p>
                    @endif
                    @if($submission->synopsis_submitted)
                        <p>{{$submission->synopsis}}</p>
                    @endif
                  </div>
                </li>
                @endforeach
			</ul>
		</div>
	</div>
<script type="text/javascript" src="/js/admin_home.js"></script>
@endsection
