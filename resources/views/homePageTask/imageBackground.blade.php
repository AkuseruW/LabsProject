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

            <div class="row">
                @foreach ($tasks as $item)
                <div class="card col-3 mr-3" style="width: 18rem;">

                    <form action="/deleteBackground/{{ $item->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- {{ dd($item->image) }} --}}
                        <img class="card-img-top" src="{{ Storage::url('img/redimensionner/'.$item->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <div class="text-center">
                                <p data-placement="top" data-toggle="tooltip" title="ok"><button class="btn btn-warning btn-xs"
                                        data-title="Validate" data-toggle="modal" data-target="#Edit{{ $item->id }}"
                                        type="button">Edit</button></p>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="modal fade" id="Edit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="edit"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="/updateBackground/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="background">
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
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-5">
        <div class="text-center">
            <form class="" action="/addBackground" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="background" id="" required>
                <div class="mt-2">
                    <button class="btn mt-5" type="submit">Ajouter Image</button>
                </div>
            </form>
        </div>
    </div>


    {{-- Fin Image Carousel --}}

    <script src="{{url('js/app.js')}}"></script>
    {{--
    <link rel="stylesheet" href="{{url('css/app.css')}}"> --}}
    @stop
