@extends('admin.layout.main')

<style type="text/css">
	.profieCard {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  border-radius: 10px;
	  max-width: 300px;
	  margin: auto;
	  text-align: center;
	  font-family: arial;
	}

	.profileTitle {
	  color: grey;
	  font-size: 18px;
	}
</style>
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("This Staff will be deleted.");
  });
});
</script>
<div class="row">

		@if(count($staffs)>0)
		@foreach($staffs as $staff)
			<div class="col-lg-4">
				<div style="margin:20px;">
					<img class="image" src="/images/{{$staff->image}}" alt="Avatar" style="width:150px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
					<div class="profieCard bg-dark">
						<h3>{{$staff->name}}</h3>
						<p class="profileTitle">{{$staff->position}}</p>
						<div style="margin: 10px 0;">

							@if (isset($staff->facebook))
								<a href="#"><i class="fab fa-facebook"></i></a>
							@endif
							@if (isset($staff->instagram))
								<a href="#"><i class="fab fa-instagram"></i></a>
							@endif
							@if (isset($staff->twitter))
								<a href="#"><i class="fab fa-twitter"></i></a>
							@endif
							@if (isset($staff->linkedin))
								<a href="#"><i class="fab fa-linkedin"></i></a>
							@endif

						</div>
							<form action="{{ action('StaffsController@destroy' , $staff['id'])}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="DELETE"> 
							<button class="btn btn-danger">Delete Staff</button>
						</form>
						<br>
					</div>
				</div>
			</div>
		@endforeach
	@else
	<h1>Nobody here!!!</h1>
	@endif
</div>


@endsection
