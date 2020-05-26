
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
				<div class="col-md-3">
					<div style="margin:20px;">
						<img class="image" src="https://scontent.fktm8-1.fna.fbcdn.net/v/t1.0-9/58374419_2313897552190039_9001070250510254080_n.jpg?_nc_cat=102&_nc_sid=85a577&_nc_oc=AQldmJYANc_lUS9y6VNf5blmz-0eo3ArcD4yrMqZ1fxhen4IU0mGiauX12gl79Z5rpo&_nc_ht=scontent.fktm8-1.fna&oh=256cf24ce9b687e79c05f583bd6fb2e0&oe=5EF38522" alt="Avatar" style="width:150px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<div class="profieCard bg-dark">
							<h1>Madhav Humagain</h1>
							<p class="profileTitle">Senior Engineer</p>
							<div style="margin: 10px 0;">
								<a href="#"><i class="fab fa-facebook-f"></i></a> 
								<a href="#"><i class="fab fa-instagram"></i></a>  
								<a href="#"><i class="fab fa-twitter"></i></a>  
								<a href="#"><i class="fab fa-linkedin"></i></a>  
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div style="margin:20px;">
						<img class="image" src="https://scontent.fktm8-1.fna.fbcdn.net/v/t1.0-9/48374924_608780379574865_272490605207093248_n.jpg?_nc_cat=102&_nc_sid=7aed08&_nc_oc=AQle3Iglgqdq3vwI0RLdIcTGCL_lg9nSP8gkSUGXDBKMQEaACKLv_LBkx12I77vNkpc&_nc_ht=scontent.fktm8-1.fna&oh=79d0d65c22bfce0577bceec2d658c942&oe=5EF1271A" alt="Avatar" style="width:150px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<div class="profieCard bg-dark">
							<h1>KaVeer Panthi</h1>
							<p class="profileTitle">Front End Developer</p>
							<div style="margin: 10px 0;">
								<a href="#"><i class="fab fa-facebook-f"></i></a> 
								<a href="#"><i class="fab fa-instagram"></i></a>  
								<a href="#"><i class="fab fa-twitter"></i></a>  
								<a href="#"><i class="fab fa-linkedin"></i></a>  
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div style="margin:20px;">
						<img class="image" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:150px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<div class="profieCard bg-dark">
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
				<div class="col-md-3">
					<div style="margin:20px;">
						<img class="image" src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:150px;border-radius: 50%; display: block; margin-left: auto; margin-right: auto;"><br>
						<div class="profieCard bg-dark">
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
