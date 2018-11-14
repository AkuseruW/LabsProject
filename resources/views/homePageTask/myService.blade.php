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

<div>
    <div class="mb-5 text-center mt-5">
        <h1>GET IN THE LAB AND SEE THE SERVICES</h1>
    </div>

    <div class="">

        <div class=" pb-5 row">
            @foreach ($service as $services)
            <form class="col-3" action="" method="POST" enctype="multipart/form-data">
                <div class="card" style="width: 18rem;">
                    {!! $services->icone !!}
                    <div class="card-body">
                        <h3>{{ $services->titre }}</h3>
                        <p class="card-text">{{ $services->description }}</p>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-danger btn-lg">Delete</button>
                    <a href="" type="btn" class="btn btn-warning btn-lg">Edit</a>
                </div>
            </form>
            @endforeach
        </div>
    </div>

</div>

{{-- Fin Services --}}

@stop
