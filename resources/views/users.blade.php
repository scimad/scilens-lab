@extends('layout')



@section('content')
	<div class="wrapper">
		<div class="row" style="margin-top:150px;margin-right:100px;margin-left:100px;">

			@if(count($users)>0)
				@foreach($users as $user)
					<div class="col-lg-4">
						<div style="margin:20px;">
							<div class="profieCard bg-dark">
								<h3>{{$user->name}}</h3>
								<p class="profileTitle">{{$user->email}}</p>
							</div>
						</div>
					</div>
				@endforeach
			@endif

		</div>
	</div>

@endsection
