@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<div class="container mb-5">
    <form action="/updateArticles/{{ $article->id }}" method="post">
        @csrf
        <div>
            <h3>Nom Article</h3>
            <input class="form-control mb-4" name="titreArticle" type="text" placeholder="Default input">
        </div>
        <div class="row pb-4">
            <div class="col-6">
                <h3>Default Categorie</h3>
                <div class="row">
                    <div class="col-11" style="padding-right:0">
                        <select class="form-control" name="categories" id="">
                            @foreach ($categories as $key => $categorie)
                            <option value="{{ $categorie->id }}">{{$categorie->name}}</option>
                            @endforeach
                        </select>
                        <input class="form-control slidedown" name="newcategories" type="text" placeholder="Create New Position">
                    </div>
                    <div class="col-1" style="padding:0">
                        <button type="button" class="btn js-toggle">+</button>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <h3>Default Tag</h3>
                <div class="row">
                    <div class="col-11" style="padding-right:0">
                        <div class="form-check">
                            @foreach ($tags as $key => $tag)
                            <div class="d-inline-flex mx-3">

                                <input class="form-check-input" name="tags[]" type="checkbox" id="defaultCheck1" value="{{ $tag->id }}">
                                <label class="form-check-label" for="defaultCheck1">
                                    {{$tag->name}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <input class="form-control slide" name="newTags" type="text" placeholder="Create New Position">
                    </div>
                    <div class="col-1" style="padding:0">
                        <button type="button" class="btn js-toggles">+</button>
                    </div>
                </div>


            </div>
        </div>

        <h3>Content</h3>
        <script src="/ckeditor/ckeditor.js"></script>
        <textarea name="descriptionArticle" id="editor1" rows="10" cols="80">

        </textarea>

        <script>CKEDITOR.replace('descriptionArticle');</script>

        <div class="text-center mt-3">
            <input type="file" name="imageArticle" id="">
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-lg" type="submit">Create</button>
        </div>
    </form>
</div>

@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
    .slidedown {
        -webkit-transform: scaleY(0);
        -o-transform: scaleY(0);
        -ms-transform: scaleY(0);
        transform: scaleY(0);

        -webkit-transform-origin: top;
        -o-transform-origin: top;
        -ms-transform-origin: top;
        transform-origin: top;

        -webkit-transition: -webkit-transform 0.2s ease;
        -o-transition: -o-transform 0.2s ease;
        -ms-transition: -ms-transform 0.2s ease;
        transition: transform 0.2s ease;
    }

    .slidedown.active {
        -webkit-transform: scaleY(1);
        -o-transform: scaleY(1);
        -ms-transform: scaleY(1);
        transform: scaleY(1);
    }

    .slide {
        -webkit-transform: scaleY(0);
        -o-transform: scaleY(0);
        -ms-transform: scaleY(0);
        transform: scaleY(0);

        -webkit-transform-origin: top;
        -o-transform-origin: top;
        -ms-transform-origin: top;
        transform-origin: top;

        -webkit-transition: -webkit-transform 0.2s ease;
        -o-transition: -o-transform 0.2s ease;
        -ms-transition: -ms-transform 0.2s ease;
        transition: transform 0.2s ease;
    }

    .slide.active {
        -webkit-transform: scaleY(1);
        -o-transform: scaleY(1);
        -ms-transform: scaleY(1);
        transform: scaleY(1);
    }

</style>
@stop

@section('js')

<script>
    $('.js-toggle').click(function () {
        $('.slidedown').toggleClass('active');
    });

    $('.js-toggles').click(function () {
        $('.slide').toggleClass('active');
    });

</script>

@stop
