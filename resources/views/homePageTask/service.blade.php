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
{{-- <div class="mb-5 text-center mt-5">
    <h1>GET IN THE LAB AND SEE THE SERVICES</h1>
</div>

<div class="mt-5 container">

    <form action="/createServiceOk" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="pb-3 col-6">
                <h4>Titre</h4>
                <input class="form-control form-control-lg" name="titreService" type="text">
            </div>

            <div class="pb-3 col-6">
                <h4>Icone</h4>
                <input class="form-control form-control-lg" name="iconeService" type="text">
            </div>
        </div>

        <div class="pb-3">
            <h4>Description</h4>
            <textarea class="form-control form-control-lg" name="descriptionService" id="" cols="30" rows="10">

            </textarea>
        </div>


        <div class="text-center">
            <button class="btn btn-lg" type="submit">Create</button>
        </div>
    </form>

</div>

<div>
    <div class=" pb-5 row">
        @foreach ($cards as $cardsItem)
        <form class="col-3" action="" method="POST" enctype="multipart/form-data">
            <div class="card" style="width: 18rem;">
                {!! $cardsItem->icone !!}
                <div class="card-body">
                    <h3>{{ $cardsItem->titre }}</h3>
                    <p class="card-text">{{ $cardsItem->description }}</p>
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
</div> --}}

<div>
    <div class="mb-5 text-center mt-5">
        <h1>GET IN THE LAB AND SEE THE SERVICES</h1>
    </div>

    <div class="container">

        <div class="mt-5">
            <form action="/createServiceOk" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="pb-3">
                            <h4>Titre</h4>
                            <input class="form-control form-control-lg" name="titreService" type="text">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="pb-3">
                            <h4>Icone</h4>
                            <input class="form-control form-control-lg" name="iconeService" type="text">
                        </div>
                    </div>
                </div>

                <div class="pb-3">
                    <h4>Description</h4>
                    <textarea class="form-control form-control-lg" name="descriptionService" id="" cols="30" rows="10">

                    </textarea>
                </div>

                <div class="text-center">
                    <button class="btn btn-lg" type="submit">Create</button>
                </div>
            </form>
        </div>
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
