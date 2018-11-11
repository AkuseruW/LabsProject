@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<div class="container mb-5">
    <form action="/createArticles" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <h3>Nom Article</h3>
                <input class="form-control mb-4" name="titreArticle" type="text" placeholder="Default input">
            </div>
            <div class="col-6">
                <h3>Default Tag</h3>

                <select class="form-control" name="tags" id="">
                    @foreach ($tags as $key => $tag)
                    <option value="{{ $tag->id }}">{{$tag->name}}</option>
                    @endforeach
                </select>

            </div>
        </div>

        <h3>Description Article</h3>
        <textarea name="descriptionArticle" id="" cols="30" rows="10" class="form-control" type="text" placeholder="Default input">

        </textarea>

        <div class="text-center mt-4">
            <button class="btn btn-lg" type="submit">Create</button>
        </div>
    </form>
</div>

<div class="row">
@foreach ($articles as $article)
    <div class="col-3 text-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $article->name }}</h5>
                <p class="card-text">
                    {{ $article->content }}
                </p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>
    </div>
    @endforeach
</div>


@stop
