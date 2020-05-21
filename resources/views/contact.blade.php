@extends('layout')


@section('subheader')
Components inside the header goes here!!!!!!!!

@endsection
	
@section('content')
    <div class="wrapper">
		<div class="row">
	  		<div class="col-6">
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
	  
	  		<div class="col-6">
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
@endsection