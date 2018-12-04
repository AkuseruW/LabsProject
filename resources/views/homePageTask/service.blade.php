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

    <div class="container">

        <div class="mt-5">
            <form action="/createServiceOk" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="pb-3">
                            <h4>Titre</h4>
                            <input class="form-control form-control-lg" name="titreService" type="text" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="pb-3">
                                <h4>Icone</h4>

                                <select class="form-control form-control-lg" name="iconeService" id="">
                                    @foreach ($icones as $icone)
                                    <option value="{{ $icone->id }}">{{$icone->name}}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="pb-3">
                    <h4>Description</h4>
                    <textarea class="form-control form-control-lg" name="descriptionService" id="" cols="30" rows="10" required>

                    </textarea>
                </div>

                <div class="text-center">
                    <button class="btn btn-lg" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>


</div>

{{-- Fin Services --}}

@stop
