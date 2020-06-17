@extends('admin.layout.main')


@section('content')

<div class="row">

	@if(count($staffs)>0)
		@foreach($staffs as $staff)
			<div class="col">
				<div style="margin:20px;">
					<img class="image" src="/images/{{$staff->image}}" alt="Avatar" style="width:150px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<h3><strong>Name:</strong>{{$staff->name}}</h3>
						<p><strong>Position:</strong>{{$staff->position}}</p>
						<p><strong>Address:</strong>{{$staff->address}}</p>
						<div style="margin: 10px 0;">
							<strong>Facebook:</strong><a href="#">{{$staff->facebook}}</a> 
							<strong>Instagram:</strong><a href="#">{{$staff->instagram}}</a>  
							<strong>Twitter:</strong><a href="#">{{$staff->twitter}}</a>  
							<strong>LinkedIn:</strong><a href="#">{{$staff->linkedin}}</a>  
						</div>
						<form action="{{ action('StaffsController@destroy' , $staff['id'])}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="DELETE"> 
							<button class="btn btn-danger">Delete Staff</button>
						</form>
				</div>
			</div>
		@endforeach
	@else
	<h1>Nobody here!!!</h1>
	@endif
</div>


@endsection
