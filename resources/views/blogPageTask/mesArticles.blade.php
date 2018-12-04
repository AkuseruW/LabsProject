@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div class="row">
        @foreach ($articles as $article)
        @can('editeur',$article)

        <div class="col">

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="text-center">
                        <h6 class="card-subtitle mb-2 text-muted">
                            <h2>{{ $article->created_at->format('d') }}</h2>
                            <h3>{{ $article->created_at->format('M y') }}</h3>
                        </h6>
                        <h5 class="card-title mt-4 mb-4">{{ $article->name }}</h5>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                        <div class="text-center">
                            <a href="/monArticle/{{ $article->id }}" class="card-link">Voir plus</a>
                        </div>
                </div>
            </div>

        </div>
        @endcan
        @endforeach

    </div>
</div>
@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
