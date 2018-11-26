@extends('layouts.labs')
<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact">Contact</a></li>
            {{-- <li><a href="elements.html">Elements</a></li> --}}
        </ul>
    </nav>
</header>
<!-- Header section end -->
<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="img/big-logo.png" alt="">
            <p>Get your freebie template now!</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($imgBackground as $img)
        <div class="item  hero-item" data-bg="{{ Storage::url('img/redimensionner/'.$img->image) }}"></div>
        @endforeach
        {{-- <div class="item  hero-item" data-bg="img/02.jpg"></div> --}}
    </div>
</div>
<!-- Intro Section -->


<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->

                @foreach ($services as $service)

                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            {!! $service->iconeService->icone !!}
                        </div>
                        <h2>{{ $service->titre }}</h2>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>Get in <span>the Lab</span> and discover the world</h2>
            </div>

            @foreach ($text as $txt)
            {!! $txt->text !!}
            @endforeach

            <div class="text-center mt60">
                <a href="" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="img/video.jpg" alt="">

                        @foreach ($video as $video)

                        <a href="{!! $video->video !!}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->


<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>What our clients say</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->

                    @foreach ($testimonials as $testimonial)
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{ $testimonial->avis }}</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/01.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>{{ $testimonial->name }}</h2>
                                <p>{{ $testimonial->function }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->


<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            <!-- single service -->

            @foreach ($serviceNoRandom as $serv)


            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        {!! $serv->iconeService->icone !!}
                    </div>
                    <div class="service-text">
                        <h2>{{ $serv->titre }}</h2>
                        <p>{{ $serv->description }}</p>
                    </div>
                </div>
            </div>

            @endforeach



        </div>
        <div class="text-center">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->


<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and meet the team</h2>
        </div>
        <div class="row">
            <!-- single member -->

            <div class="col-sm-4">
                <div class="member">
                    <img src="{{ Storage::url('img/redimensionner/'.$users[0]->imageUsers->url) }}" alt="">
                    <h2>{{ $users[0]->name }}</h2>
                    {{ dd($users[0]->positions) }}
                    <h3>{{ $users[0]->positions->name }}</h3>
                </div>
            </div>

            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/{{ $admin[0]->imageUsers->url }}" alt="">
                    <h2>{{ $admin[0]->name }}</h2>
                    {{-- <h3>{{ $admin[0]->positions->name }}</h3> --}}
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{ Storage::url('img/redimensionner/'.$users2[0]->imageUsers->url) }}" alt="">
                    <h2>{{ $users2[0]->name }}</h2>
                    {{-- <h3>{{ $users2[0]->positions->name }}</h3> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->


<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Are you ready to stand out?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="" class="site-btn btn-2">Browse</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->


<!-- Contact section -->
@include('partials/contact')
<!-- Contact section end-->
