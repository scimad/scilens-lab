@extends('layout')

@section('content')

<div id="page-wrap">



@section('subheader')

    <div class="container fh5co-hero-inner">
        <h1 class="animated fadeIn wow" data-wow-delay="0.4s">Innovate, Simplify, Realize</h1>
        <p class="animated fadeIn wow" data-wow-delay="0.67s">Here at 4x4, We innovate solutions to your problems, ease out your existing pains and make your idea real.</p>
        <button class="btn btn-md download-btn-first wow fadeInLeft animated" data-wow-delay="0.85s" onclick="$('#fh5co-download').goTo();return false;">I have an idea</button>
        <button class="btn btn-md features-btn-first animated fadeInLeft wow" data-wow-delay="0.95s" onclick="$('#fh5co-features').goTo();return false;">I have a problem</button>
        <img class="fh5co-hero-smartphone animated fadeInRight wow" data-wow-delay="1s" src="img/phone-image.png" alt="Smartphone">
    </div>
@endsection

<!-- ==========================================================================================================
                                                  Features
     ========================================================================================================== -->


<div class="fh5co-advantages-outer">
    <div class="container">
        <h1 class="second-title"><span class="span-perfect">Out</span> <span class="span-features">Tools</span></h1>
        <small>Let us help you choose what you need</small>

        <div class="row fh5co-advantages-grid-columns wow animated fadeIn" data-wow-delay="0.36s">

            <div class="col-sm-4">
                <img class="grid-image" src="img/icon-1.png" alt="Icon-1">
                <h1 class="grid-title">Algorithms</h1>
                <p class="grid-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cupiditate.</p>
            </div>

            <div class="col-sm-4">
                <img class="grid-image" src="img/icon-2.png" alt="Icon-2">
                <h1 class="grid-title">Web Design</h1>
                <p class="grid-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cupiditate.</p>
            </div>

            <div class="col-sm-4">
                <img class="grid-image" src="img/icon-3.png" alt="Icon-3">
                <h1 class="grid-title">Machine Learning</h1>
                <p class="grid-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cupiditate.</p>
            </div>


        </div>
    </div>
</div>


<!-- ==========================================================================================================
                                                  SLIDER
     ========================================================================================================== -->

    <div class="fh5co-slider-outer wow fadeIn" data-wow-delay="0.36s">
        <h1>OUR SERVICES</h1>
        <small>Exclusively for 21st century</small>
        <div class="container fh5co-slider-inner">

            <div class="owl-carousel owl-theme">

                <div class="item"><img src="img/java.png" alt=""></div>
                <div class="item"><img src="img/python.png" alt=""></div>
                <div class="item"><img src="img/javascript.png" alt=""></div>
                <div class="item"><img src="img/cpp.png" alt=""></div>


            </div>

        </div>
    </div>



<!-- ==========================================================================================================
                                                  FEATURES
     ========================================================================================================== -->

<div class="curved-bg-div wow animated fadeIn" data-wow-delay="0.15s"></div>
<div id="fh5co-features" class="fh5co-features-outer">
    <div class="container">

        <div class="row fh5co-features-grid-columns">

            <div class="col-sm-6 in-order-1 wow animated fadeInLeft" data-wow-delay="0.22s">
                <div class="col-sm-image-container">
                    <img class="img-float-left" src="img/iphone.png" alt="smartphone-1">
                </div>
            </div>

            <div class="col-sm-6 in-order-2 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
                <h1>Web / Desktop / Mobile</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolor iste beatae ad adipisci, fugiat dignissimos pariatur, dolore nemo suscipit cum nisi earum voluptates nulla! </p>
                <span class="circle circle-first"><i class="fab fa-instagram"></i></span>
                <span class="circle circle-middle"><i class="fab fa-facebook"></i></span>
                <span class="circle circle-last"><i class="fab fa-twitter"></i></span>
            </div>

            <div class="col-sm-6 in-order-3 sm-6-content wow animated fadeInLeft" data-wow-delay="0.22s">
                <h1>AI and stuffs</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolor iste beatae ad adipisci, fugiat dignissimos pariatur, dolore nemo suscipit cum nisi earum voluptates nulla! </p>
                <span class="circle circle-first"><i class="fas fa-star"></i></span>
                <span class="circle circle-middle"><i class="far fa-star"></i></span>
                <span class="circle circle-last"><i class="far fa-thumbs-up"></i></span>
            </div>

            <div class="col-sm-6 in-order-4 wow animated fadeInRight" data-wow-delay="0.22s">
                <img class="img-float-right" src="img/stats.png" alt="stats" style="height:500px; width:500px;">
            </div>

            <div class="col-sm-6 in-order-5 wow animated fadeInLeft" data-wow-delay="0.22s">
                <div class="col-sm-image-container">
                    <img class="img-float-left" src="img/smartphone-2.png" alt="smartphone-3">
                </div>
            </div>
            <div class="col-sm-6 in-order-6 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
                <h1>Kits and wares</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolor iste beatae ad adipisci, fugiat dignissimos pariatur, dolore nemo suscipit cum nisi earum voluptates nulla! </p>
                <span class="circle circle-first">95%</span>
                <span class="circle circle-middle"><i class="fas fa-forward"></i></span>
                <span class="circle circle-last"><i class="fab fa-github"></i></span>

            </div>




        </div> <!-- row -->


    </div>
</div>


<!-- ==========================================================================================================
                                                  REVIEWS
     ========================================================================================================== -->

<div id="fh5co-reviews" class="fh5co-reviews-outer">
    <h1>What people are saying</h1>
    <small>Reviews</small>
    <div class="container fh5co-reviews-inner">
        <div class="row justify-content-center">
            <div class="col-sm-5 wow fadeIn animated" data-wow-delay="0.25s">
                <img class="float-left" src="img/quotes-1.jpg" alt="Quote 1">
                <p class="testimonial-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis similique quasi.</p>
                <small class="testimonial-author">John Doe</small>
                <img class="float-right" src="img/quotes-2.jpg" alt="Quote 2">
            </div>
            <div class="col-sm-5 testimonial-2 wow fadeIn animated" data-wow-delay="0.67s">
                <img class="float-left" src="img/quotes-1.jpg" alt="Quote 1">
                <p class="testimonial-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis similique quasi.</p>
                <small class="testimonial-author">Someone</small>
                <img class="float-right" src="img/quotes-2.jpg" alt="Quote 2">
            </div>
        </div>

    </div>
</div>


<!-- ==========================================================================================================
                                             BOTTOM
========================================================================================================== -->

<div id="fh5co-download" class="fh5co-bottom-outer">
    <div class="overlay">
        <div class="container fh5co-bottom-inner">
            <div class="row">
                <div class="col-sm-6">
                    <h1>And miles to go before we sleep...</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque suscipit, similique animi saepe, ipsam itaque, tempore minus maxime pariatur error unde fugit tenetur.</p>
                    <a class="wow fadeIn animated" data-wow-delay="0.25s" href="#"><img class="app-store-btn" src="img/app-store-icon.png" alt="App Store Icon"></a>
                    <a class="wow fadeIn animated" data-wow-delay="0.67s" href="#"><img class="google-play-btn" src="img/google-play-icon.png" alt="Google Play Icon"></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
