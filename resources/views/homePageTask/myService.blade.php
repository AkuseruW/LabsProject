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
        <div class="row">
            @foreach ($service as $services)
            <div class="col-md-4 col-sm-6 mb-5">
                <div class="sv-card">
                    <div class="card-text">
                        <h2>{{ $services->titre }}</h2>
                        <p>{{ $services->description }}</p>
                    </div>
                </div>

                <div>
                    <div class="text-center">
                        <button class="btn btn-danger btn-xs" data-title="Validate" data-toggle="modal" data-target="#Delete{{ $services->id }}"
                            type="button">Delete</button>
                        <button class="btn btn-warning btn-xs" data-title="Validate" data-toggle="modal" data-target="#Edit{{ $services->id }}"
                            type="button">Edit</button>
                    </div>
                </div>

            </div>

            <div class="modal fade" id="Edit{{ $services->id }}" tabindex="-1" role="dialog" aria-labelledby="edit"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="/updateService/{{ $services->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="form-control form-control-lg border rounded" name="titreService"
                                        type="text" value="{{$services->titre}}" required>
                                        </div>
                                        <div class="col-6">
                                            <select class="form-control form-control-lg border rounded" name="iconeService"
                                                id="">
                                                @foreach ($icones as $icone)
                                                <option value="{{ $icone->id }}">{{$icone->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <textarea class="form-control form-control-lg border rounded" name="descriptionService"
                                    id="" cols="30" rows="10" required>{{$services->description}}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer text-center ">
                                    <button class="btn">Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>

            <div class="modal fade" id="Delete{{ $services->id }}" tabindex="-1" role="dialog" aria-labelledby="edit"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="modal-body">

                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you
                                    want to delete this ?
                                </div>

                            </div>

                            <div class="modal-footer ">
                                <form action="/deleteService/{{ $services->id }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Fin Services --}}
<script src="{{url('js/app.js')}}"></script>
    @stop
