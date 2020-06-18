@extends('layout')

@section('subheader')
	 <div class="container fh5co-hero-inner">
        <h1 class="animated fadeIn wow" data-wow-delay="0.4s">Meet our team</h1>
        <p class="animated fadeIn wow" data-wow-delay="0.67s">4x4 is a collective emergence of skillful engineers and experienced developers. We don't leave any of the encountered problems unsolved. Solution is always the primary essence of Scilens.</p>
        <button class="btn btn-md download-btn-first wow fadeInLeft animated" data-wow-delay="0.85s" onclick="$('#fh5co-download').goTo();return false;">Contact Us</button>
        <img class="fh5co-hero-smartphone animated fadeInRight wow" data-wow-delay="1s" src="img/team.png" alt="Team" style="height:400px; width:400px;">
    </div>
@endsection


@section('content')
	<div class="wrapper">
		<div class="row" style="margin-top:150px;margin-right:100px;margin-left:100px;">
		
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
							</div>
						</div>
					</div>
				@endforeach
			@endif
		
		</div>
	</div>




	<div class="wrapper">
		<div style="margin-top:100px;">
			<div class="row">
				<div class="col-md-6">
					<img src="./images/01.png" class="secwrapper">
					<div class="communication">
						<h5><p>We always welcome your communication and feedback. Feel free to contact us through email or call.</p></h5>
						<h5><img src="./images/call.png">+977-9818-500-612</h5><br><br>
						<h5><img src="./images/email.png">scilens4x4@gmail.com</h5><br><br>
						<h5><img src="./images/facebook.png">facebook.com/scilens4x4</h5><br><br>
						<h5><img src="./images/twitter.png">twitter.com/scilens4x4</h5><br><br>
						<h5><img src="./images/instagram.png">instagram.com/scilens4x4</h5><br>
					</div>
				</div>
		
				<div class="col-md-6">
					<img src="./images/02.png" class="secwrapper">
					<div class="communication">
						<div class="form-group">
							<input type="text" class="form-control" id="usr" placeholder="Your Name"><br>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="Email Address"><br>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="tel" placeholder="Telephone Number"><br>
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="6" id="comment" placeholder="Message"></textarea><br>
						</div>
						<button type="button" class="btn btn-success">Submit</button>
					</div>
					<div class="information">Send us a message. We will communicate within less than 24 hours time!!!</div>
				</div>
			</div>
		</div>
	</div>
@endsection
