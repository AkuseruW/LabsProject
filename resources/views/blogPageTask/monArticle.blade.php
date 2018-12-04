@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


{{-- <h1>Mes Articles</h1> --}}
<div class="container">
    <div class="row">
        {{-- {{dd($article->id)}} --}}
        <form action="/deleteArticle/{{$article->id}}" method="post">
            @csrf
            <div class="single-post">
                <div class="post-thumbnail ">

                    <img src="img/blog/blog-1.jpg" alt="">
                    <div class="post-date position-relative py-3">
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
                        <a href="/commentaire/{{ $article->id }}">{{ count($article->commentaires) }} Comments</a>
                    </div>
                    <p>
                        {!! $article->content !!}
                    </p>
                </div>
                <!-- Post Author -->
                <div class="author pt-5">
                    <div class="avatar">
                        <img src="{{ Storage::url('img/redimensionner/'.$article->user->imageUsers->url) }}" alt="">
                    </div>
                    <div class="author-info">
                        {{-- {{ dd($article->user->name) }} --}}
                        <h2>{{ $article->user->name }}, <span>Author</span></h2>
                    <p>{{$article->user->biography}}</p>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                    {{-- {{ dd($article->id) }} --}}
                    <a href="/editArticle/{{ $article->id }}" class="btn btn-warning btn-lg">Edit</a>
                </div>
        </form>
    </div>
</div>

<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{url('css/flaticon.css')}}" />
<link rel="stylesheet" href=" {{url('css/owl.carousel.css ')}}" />
<link rel="stylesheet" href=" {{url('css/style.css')}}" />

@stop
