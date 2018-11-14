@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<form action="/createProject" method="post">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-6">
                <input class="form-control form-control-lg" name="nameProject" type="text">
            </div>
            <div class="col-6">
                <select class="form-control form-control-lg" name="iconeProject" id="">
                    @foreach ($icones as $icone)
                    <option value="{{ $icone->id }}">{{$icone->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mt-4">
            <textarea class="form-control form-control-lg" name="descriptionProject" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="text-center mt-3">
            <input type="file" name="imageProject" class="" id="">
        </div>
        <div class="text-center"><button class="btn btn-lg mt-3">Create</button></div>
    </div>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
