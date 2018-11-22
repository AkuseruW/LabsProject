@extends('layouts.BlogSearch')
<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Blog</h2>
            <div class="page-links">
                <a href="/">Home</a>
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
            @if(isset($details))
            <div class="col-md-8 col-sm-7 blog-posts">
                @foreach ($articleSearch as $key => $article)
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog-2.jpg" alt="">
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
                            {{-- <a href="">{{ count($article->commentaires) }} Comments</a> --}}
                        </div>
                        <p>{!! $article->limitecontent !!}</p>
                        <a href="/blog-post/{{ $article->id }}" class="read-more">Read More</a>
                    </div>
                </div>
                @endforeach

                <!-- Pagination -->
                <div class="page-pagination">
                    {{ $articleSearch->links() }}
                </div>
            </div>
            @endif
            <!-- Sidebar area -->
            @include('partials/sidebar')
        </div>
    </div>
</div>
<!-- page section end-->

<!-- newsletter section -->
@include('partials/newsletter')
<!-- newsletter section end-->
