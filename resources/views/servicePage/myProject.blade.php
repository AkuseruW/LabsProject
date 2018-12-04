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
                    <img src="{{ Storage::url($project->imageProject->url) }}" alt="">
                </div>
                <div class="card-text">
                    <h2>{{ $project->titre }}</h2>
                    <p>{{ $project->description }}</p>
                </div>
            </div>

            <div>
                <div class="text-center">
                    <button class="btn btn-danger btn-xs" data-title="Validate" data-toggle="modal" data-target="#Delete{{ $project->id }}"
                        type="button">Delete</button>
                    <button class="btn btn-warning btn-xs" data-title="Validate" data-toggle="modal" data-target="#Edit{{ $project->id }}"
                        type="button">Edit</button>
                </div>
            </div>

        </div>

        <div class="modal fade" id="Edit{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="edit"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="/updateProject/{{ $project->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                    <input class="form-control form-control-lg border rounded" value="{{$project->titre}}" name="nameProject"
                                            type="text" required>
                                    </div>
                                    <div class="col-6">
                                        <select class="form-control form-control-lg border rounded" name="iconeProject"
                                            id="">
                                            @foreach ($icones as $icone)
                                            <option value="{{ $icone->id }}">{{$icone->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <textarea class="form-control form-control-lg border rounded" name="descriptionProject"
                                id="" cols="30" rows="10" required>{{ $project->description }}</textarea>
                                </div>
                                <div class="text-center mt-3">
                                    <input class='border rounded' type="file" name="imageProject" required>
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

        <div class="modal fade" id="Delete{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="edit"
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
                            <form action="/deleteProject/{{ $project->id }}" method="POST">
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

<script src="{{url('js/app.js')}}"></script>
@stop
