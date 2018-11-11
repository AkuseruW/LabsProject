@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif
@stop

@section('content')
{{-- Image Carousel --}}

<div class="container">
    <div class="text-center">
        <div class="mb-5">
            <h1>Ajoute Image Carousel</h1>

            @foreach ($tasks as $item)
            <div id="hero-slider" class="owl-carousel">
                <img class="card-img-top" src="{{ Storage::url($item->image)}}" alt="Card image cap">
            </div>
            @endforeach

            <form action="/addBackground" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="background" id="">
                <div class="mt-2">
                    <button class="btn" type="submit">Ajouter Image</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- Fin Image Carousel --}}
@stop
