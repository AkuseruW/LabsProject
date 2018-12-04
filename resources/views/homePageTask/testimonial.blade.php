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

{{-- Testimonial --}}
<div class="text-center mt-5">
    <h1>WHAT OUR CLIENTS SAY</h1>
</div>

<div class="container">
    <div class="mt-3">
        <form action="/createTesti" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="pt-2 pb-2 col-6">
                    <h4>Nom</h4>
                <input class="form-control form-control-lg" name="name" type="text" value="{{old('name')}}" required>
                </div>

                <div class="pt-2 pb-2 col-6">
                    <h4>Fonction</h4>
                    <input class="form-control form-control-lg" name="fonction" type="text" value="{{old('fonction')}}"  required>
                </div>
            </div>


            <div class="pb-2">
                <h4>Avis</h4>
                <textarea class="form-control form-control-lg" name="avis" id="" cols="30" rows="10" value="{{old('avis')}}" required>

                </textarea>
            </div>

            <div class="pt-2 pb-3 text-center">
                <input type="file" name="image" id="" value="{{old('image')}}" required>
            </div>

            <div class="text-center">
                <button class="btn btn-lg" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>

<div class="mt-5">
    <div class="row">
        @foreach ($testimonial as $testim)
    <form class="col-3" action="/deleteTestimonial/{{$testim->id}}" method="post">
        @csrf
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ Storage::url($testim->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $testim->avis }}</h5>
                    <p class="card-text">{{ $testim->name }}</p>
                    <p class="card-text">{{ $testim->function }}</p>
                    <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                    <a class="btn btn-warning btn-lg" type="btn" href="">Edit</a>
                </div>
            </div>

        </form>
        @endforeach
    </div>
</div>


{{-- Fin testimonial --}}

@stop
