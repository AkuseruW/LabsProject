<!DOCTYPE html>
<html lang="en">

<head>
    <title>Labs - Design Studio</title>
    <meta charset="UTF-8">
    <meta name="description" content="Labs - Design Studio">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/flaticon.css" />
    <link rel="stylesheet" href="/css/owl.carousel.css" />
    <link rel="stylesheet" href="/css/style.css" />
    {{-- <link rel="stylesheet" href="/public/css/app.css"> --}}


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
            <img src="/img/logo.png" alt=""><!-- Logo -->
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">
                <li><a href="/home">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li class="active"><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                {{-- <li><a href="/elements">Elements</a></li> --}}
            </ul>
        </nav>
    </header>
    <!-- Header section end -->

    <!-- Page header -->
    <div class="page-top-section">
        <div class="overlay"></div>
        <div class="container text-right">
            <div class="page-info">
                <h2>Blog</h2>
                <div class="page-links">
                    <a href="#">Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header end-->

    <!-- page section -->
    <div class="page-section spad">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-7 blog-posts">
                    @foreach ($pagination as $article)
                    <!-- Post item -->
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="/img/blog/blog-2.jpg" alt="">
                            <div class="post-date">
                                <h2>{{ $article->created_at->format('d') }}</h2>
                                <h3>{{ $article->created_at->format('M y') }}</h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{ $article->name }}</h2>
                            <div class="post-meta">
                                <a href="">{{ $article->categories[0]->name }}</a>
                                @foreach ($article->tags as $tag)
                                <a href="">{{ $tag->name }}</a>
                                @endforeach
                                <a href="">{{ count($article->commentaires) }} Comments</a>
                            </div>
                            <p>{!! $article->limitecontent !!}</p>
                            <a href="/blog-post/{{ $article->id }}" class="read-more">Read More</a>
                        </div>
                    </div>
                    @endforeach

                    <!-- Pagination -->
                    <div class="page-pagination">
                        {{ $pagination->links() }}
                    </div>
                </div>

                <!-- Sidebar area -->
                @include('partials/sidebarSearch')
            </div>
        </div>
    </div>
    <!-- page section end-->

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
