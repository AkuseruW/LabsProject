<!DOCTYPE html>
<html lang="en">

<head>
    <title>Labs - Design Studio</title>
    <meta charset="UTF-8">
    <meta name="description" content="Labs - Design Studio">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader">
            <img src="img/logo.png" alt="">
            <h2>Loading.....</h2>
        </div>
    </div>


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
                <li><a href="contact.html">Contact</a></li>
                <li><a href="elements.html">Elements</a></li>
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
            <div class="item  hero-item" data-bg="img/01.jpg"></div>
            <div class="item  hero-item" data-bg="img/02.jpg"></div>
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
                                {!! $service->icone !!}
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
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                                elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                                elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                                elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                                elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                                elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                                elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>Michael Smith</h2>
                                    <p>CEO Company</p>
                                </div>
                            </div>
                        </div>
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
                                {!! $serv->icone !!}
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
                        <img src="img/team/1.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Project Manager</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/2.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Junior developer</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/3.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Digital designer</h3>
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


    <!-- Footer section -->
    <footer class="footer-section">
        <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    </footer>
    <!-- Footer section end -->




    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
