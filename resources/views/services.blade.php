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
            <li><a href="/">Home</a></li>
            <li class="active"><a href="/services">Services</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact">Contact</a></li>
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
                <a href="/">Home</a>
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
                {{ $serviceNoRandom->links() }}
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
        <a href="#contact" class="site-btn">Browse</a>
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
                    
                        <img src="{{ Storage::url($projectTrois->imageProject->url) }}" alt="">
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
@include('partials.newsletter')
<!-- newsletter section end-->


<!-- Contact section -->
@include('partials.contact')
<!-- Contact section end-->
