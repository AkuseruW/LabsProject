@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-md-4 col-sm-6 mb-5">
            <div class="sv-card">
                <div class="card-img">
                    <img src="img/card-1.jpg" alt="">
                </div>
                <div class="card-text">
                    <h2>{{ $project->titre }}</h2>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-danger">Delete</button>
                <a class="btn btn-warning" href="">Edit</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
