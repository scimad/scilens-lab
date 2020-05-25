
@extends('layout')

@section('subheader')
	 <div class="container fh5co-hero-inner">
        <h1 class="animated fadeIn wow" data-wow-delay="0.4s">Meet our team</h1>
        <p class="animated fadeIn wow" data-wow-delay="0.67s">4x4 is a collective emergence of skillful engineers and experienced developers. We don't leave any of the encountered problems unsolved. Solution is always the primary essence of Scilens.</p>
        <button class="btn btn-md features-btn-first animated fadeInLeft wow" data-wow-delay="0.95s" onclick="$('#fh5co-features').goTo();return false;">Contact Us</button>
        <img class="fh5co-hero-smartphone animated fadeInRight wow" data-wow-delay="1s" src="img/team.png" alt="Team" style="height:400px; width:400px;">
    </div>
@endsection


@section('content')
		<div class="container" style="margin-top:150px;">
			<div class="row">
				<div class="col-1-4">
					<div style="margin:20px;">
						<img class="image" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:200px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<div class="profieCard">
							<h1>John Doe</h1>
							<p class="profileTitle">CEO & Founder</p>
							<div style="margin: 10px 0;">
								<a href="#"><i class="fab fa-facebook-f"></i></a> 
								<a href="#"><i class="fab fa-instagram"></i></a>  
								<a href="#"><i class="fab fa-twitter"></i></a>  
								<a href="#"><i class="fab fa-linkedin"></i></a>  
							</div>
						</div>
					</div>
				</div>
				<div class="col-2-4">
					<div style="margin:20px;">
						<img class="image" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:200px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<div class="profieCard">
							<h1>John Doe</h1>
							<p class="profileTitle">CEO & Founder</p>
							<div style="margin: 10px 0;">
								<a href="#"><i class="fab fa-facebook-f"></i></a> 
								<a href="#"><i class="fab fa-instagram"></i></a>  
								<a href="#"><i class="fab fa-twitter"></i></a>  
								<a href="#"><i class="fab fa-linkedin"></i></a>  
							</div>
						</div>
					</div>
				</div>
				<div class="col-3-4">
					<div style="margin:20px;">
						<img class="image" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:200px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<div class="profieCard">
							<h1>John Doe</h1>
							<p class="profileTitle">CEO & Founder</p>
							<div style="margin: 10px 0;">
								<a href="#"><i class="fab fa-facebook-f"></i></a> 
								<a href="#"><i class="fab fa-instagram"></i></a>  
								<a href="#"><i class="fab fa-twitter"></i></a>  
								<a href="#"><i class="fab fa-linkedin"></i></a>  
							</div>
						</div>
					</div>
				</div>
				<div class="col-4-4">
					<div style="margin:20px;">
						<img class="image" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:200px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<div class="profieCard">
							<h1>John Doe</h1>
							<p class="profileTitle">CEO & Founder</p>
							<div style="margin: 10px 0;">
								<a href="#"><i class="fab fa-facebook-f"></i></a> 
								<a href="#"><i class="fab fa-instagram"></i></a>  
								<a href="#"><i class="fab fa-twitter"></i></a>  
								<a href="#"><i class="fab fa-linkedin"></i></a>  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




	<div class="wrapper">
		<div style="margin-top:100px;">
			<div class="row">
				<div class="col-md-6">
					<img src="./images/01.png" class="secwrapper">
					<div class="communication">
						<h5><p>We always welcome your communication and feedback. Feel free to contact us through email or call.</p></h5>
						<h5><img src="./images/call.png">+9779849879199</h5><br><br>
						<h5><img src="./images/email.png">scilens_lab@gmail.com</h5><br><br>
						<h5><img src="./images/facebook.png">facebook.com/scilenslab</h5><br><br>
						<h5><img src="./images/twitter.png">twitter.com/scilenslab</h5><br><br>
						<h5><img src="./images/instagram.png">instagram.com/scilenslab</h5><br>
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
