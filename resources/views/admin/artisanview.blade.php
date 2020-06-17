@extends('admin.layout.main')


@section('content')
<div class="row">

	@if(count($staffs)>0)
		@foreach($staffs ?? '' as $staff)
			<div class="col">
				<div style="margin:20px;">
					<img class="image" src="/images/{{$staff->image}}" alt="Avatar" style="width:150px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<h3>{{$staff->name}}</h3>
						<p class="profileTitle">{{$staff->position}}</p>
						<p class="profileTitle">{{$staff->address}}</p>
						<div style="margin: 10px 0;">
							<a href="#">{{$staff->facebook}}</a> 
							<a href="#">{{$staff->instagram}}</a>  
							<a href="#">{{$staff->twitter}}</a>  
							<a href="#">{{$staff->linkedin}}</a>  
						</div>
				</div>
			</div>
		@endforeach
	@endif
</div>

@endsection
