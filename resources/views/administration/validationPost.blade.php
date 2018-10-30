@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<form class="pb-3" action="">
    <div class="container">

        <div class="text-center">
            <h2 class="mb-5" style="padding-bottom:5vh">En attente de Validation</h2>
        </div>

        <ul class="list-group pb-2">
            <li style="list-style:none; font-size:2rem">#</li>
            <li class="list-group-item p-4"></li>
        </ul>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-danger">Delete</button>
        <button class="btn btn-success">Confirmer</button>
    </div>

</form>
@stop
