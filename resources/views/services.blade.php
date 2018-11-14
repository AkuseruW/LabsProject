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
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader">
            <img src="img/logo.png" alt="">
            <h2>Loading.....</h2>
        </div>
    </div> --}}


    <!-- Header section -->
    <header class="header-section">
        <div class="logo">
            <img src="img/logo.png" alt=""><!-- Logo -->
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">
                <li><a href="home.html">Home</a></li>
                <li class="active"><a href="services.html">Services</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul>
        </nav>
    </header>
    <!-- Header section end -->


    <!-- Page header -->
    <div class="page-top-section">
        <div class="overlay"></div>
        <div class="container text-right">
            <div class="page-info">
                <h2>Services</h2>
                <div class="page-links">
                    <a href="#">Home</a>
                    <span>Services</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header end-->


    <!-- services section -->
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


    <!-- features section -->
    <div class="team-section spad">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2>Get in <span>the Lab</span> and discover the world</h2>
            </div>
            <div class="row">
                <!-- feature item -->
                <div class="col-md-4 col-sm-4 features">
                    @foreach ($projects as $key => $project)
                    @if ($key < 3 ) <div class="icon-box light left">
                        <div class="service-text">
                            <h2>{{ $project->titre }}</h2>
                            <p>{{ $project->description }}</p>
                        </div>
                        <div class="icon">
                            {!! $project->iconeProject->icone !!}
                        </div>
                </div>
                @endif
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($projects as $key => $project)
                @if ($key >= 3 )
                <div class="icon-box light">
                    <div class="icon">
                        {!! $project->iconeProject->icone !!}
                    </div>
                    <div class="service-text">
                        <h2>{{ $project->titre }}</h2>
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
    </div>
    <!-- features section end-->


    <!-- services card section-->
    <div class="services-card-section spad">
        <div class="container">
            <div class="row">

                <!-- Single Card -->
                @foreach ($projectsTrois as $key => $projectTrois)
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="img/card-1.jpg" alt="">
                        </div>
                        <div class="card-text">
                            <h2>{{ $projectTrois->titre }}</h2>
                            <p>{{ $projectTrois->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- services card section end-->


    <!-- newsletter section -->
    <div class="newsletter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>Newsletter</h2>
                </div>
                <div class="col-md-9">
                    <!-- newsletter form -->
                    <form class="nl-form">
                        <input type="text" placeholder="Your e-mail here">
                        <button class="site-btn btn-2">Newsletter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter section end-->


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
