@extends('layout')

@section('content')

    <div id="page-wrap">



        @section('subheader')

            <div class="container fh5co-hero-inner">
                <h1 class="animated fadeIn wow" data-wow-delay="0.4s">Innovate, Simplify, Realize</h1>
                <p class="animated fadeIn wow" data-wow-delay="0.67s">Here at 4x4, We innovate solutions to your problems, ease out your existing pains and turn your idea into reality.</p>
                <button class="btn btn-md download-btn-first wow fadeInLeft animated" data-wow-delay="0.85s" onclick="$('#fh5co-download').goTo();return false;">I have an idea</button>
                <button class="btn btn-md features-btn-first animated fadeInLeft wow" data-wow-delay="0.95s" onclick="$('#fh5co-features').goTo();return false;">I have a problem</button>
                <img class="fh5co-hero-smartphone animated fadeInRight wow" data-wow-delay="1s" src="img/MrWolf.png" alt="MrWolf" style="height:500px; width:500px;">
            </div>
        @endsection


        <div class="fh5co-advantages-outer">
            <div class="container">
                <h1 class="second-title"><span class="span-perfect">Our</span> <span class="span-features">Tools</span></h1>
                <small>Let us help you choose what you need</small>

                <div class="row fh5co-advantages-grid-columns wow animated fadeIn" data-wow-delay="0.36s">

                    <div class="col-sm-4">
                        <img class="grid-image" src="img/icon-1.png" alt="Icon-1">
                        <h1 class="grid-title">Algorithms</h1>
                        <p class="grid-desc">We have the best possible approach to solve your problems. Let us think for you!</p>
                    </div>

                    <div class="col-sm-4">
                        <img class="grid-image" src="img/icon-2.png" alt="Icon-2">
                        <h1 class="grid-title">Web Design</h1>
                        <p class="grid-desc">Need a good looking website? We make a full fledged website with aesthetic designs.</p>
                    </div>

                    <div class="col-sm-4">
                        <img class="grid-image" src="img/icon-3.png" alt="Icon-3">
                        <h1 class="grid-title">Machine Learning</h1>
                        <p class="grid-desc">We have the best machine learning APIs and solutions for your various ML related projects. </p>
                    </div>


                </div>
            </div>
        </div>






        <div class="fh5co-slider-outer wow fadeIn" data-wow-delay="0.36s">
            <div class="container text-center">
                <h1 class="font-weight-light mb-5">We have expertise in:</h1>
                <div class="row mx-auto my-auto">
                    <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-lg-4 col-md-6">
                                    <img class="img-fluid" src="img/javascript.png">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-4 col-md-6">
                                    <img class="img-fluid" src="img/cpp.png">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-4 col-md-6">
                                    <img class="img-fluid" src="img/java.png">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-4 col-md-6">
                                    <img class="img-fluid" src="img/python.png">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev  w-auto" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" style="background-image:url(img/rtar.png); height:50px; width:50px;" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next  w-auto" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" style="background-image:url(img/lftar.png); height:50px; width:50px;" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="fh5co-slider-outer wow fadeIn">
            <h1>OUR SERVICES</h1>
            <small>Exclusively for 21st century</small>
        </div>

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
                        <p>Our complete service package includes fully integrated web, desktop and mobile software and application. We follow the most convenient and best practice for software development.</p>
                        <span class="circle circle-first"><i class="fab fa-chrome"></i></span>
                        <span class="circle circle-middle"><i class="fas fa-desktop"></i></span>
                        <span class="circle circle-last"><i class="fas fa-mobile"></i></span>
                    </div>

                    <div class="col-sm-6 in-order-3 sm-6-content wow animated fadeInLeft" data-wow-delay="0.22s">
                        <h1>AI and stuffs</h1>
                        <p>With our Machine Learning APIs you can automate almost everything you can imagine with the potential of Artificial Intelligence. We also provide various algorithms and AI related solutions.</p>
                        <span class="circle circle-first"><i class="fab fa-android"></i></span>
                        <span class="circle circle-middle"><i class="fas fa-robot"></i></span>
                        <span class="circle circle-last"><i class="far fa-lightbulb"></i></span>
                    </div>

                    <div class="col-sm-6 in-order-4 wow animated fadeInRight" data-wow-delay="0.22s">
                        <img class="img-float-right" src="img/stats.png" alt="stats">
                    </div>

                    <div class="col-sm-6 in-order-5 wow animated fadeInLeft" data-wow-delay="0.22s">
                        <div class="col-sm-image-container">
                            <img class="img-float-left" src="img/arm-kit.png" alt="armkit" style="height:400px; width:350px;">
                        </div>
                    </div>
                    <div class="col-sm-6 in-order-6 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
                        <h1>Kits and wares</h1>
                        <p>Not only the software solutions, we also provide you hardware solutions for your elctronics and mechanical projects. We have worked on a lot of projects related to robotics and embedded system.</p>
                        <span class="circle circle-first">TTL</span>
                        <span class="circle circle-middle"><i class="fas fa-microchip"></i></span>
                        <span class="circle circle-last"><i class="fas fa-plug"></i></span>
                    </div>
                </div>
            </div>
        </div>



 <!-- ==========================================================================================================
                                                          REVIEWS
             ========================================================================================================== -->

        <div id="fh5co-reviews" class="fh5co-reviews-outer">
            <!-- <h1>What people are saying</h1>
            <small>Reviews</small> -->
            <div class="container fh5co-reviews-inner">
                <div class="row justify-content-center">
                    <div class="col-sm-5 wow fadeIn animated" data-wow-delay="0.25s">
                        <img class="float-left" src="img/quotes-1.jpg" alt="Quote 1">
                        <p class="testimonial-desc">When something is important enough, you do it even if the odds are not in your favor.</p>
                        <small class="testimonial-author">Elon Musk</small>
                        <img class="float-right" src="img/quotes-2.jpg" alt="Quote 2">
                    </div>
                    <div class="col-sm-5 testimonial-2 wow fadeIn animated" data-wow-delay="0.67s">
                        <img class="float-left" src="img/quotes-1.jpg" alt="Quote 1">
                        <p class="testimonial-desc">“Where the spirit does not work with the hand, there is no art.”</p>
                        <small class="testimonial-author">Leonardo da Vinci</small>
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
                            <p>Relation with Scilens is not a temporary one time relation. We build a long term relationship so that we can help you in every steps and give you the solutions you need.</p>
                        </div>
                        <div class="col-sm-6">
                            <div style="text-align: center;">
                                <a href="/contact"><img class="app-store-btn" src="img/contact.png" alt="Contact Icon" style="width:200px;height:100px; margin-top: 50px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

