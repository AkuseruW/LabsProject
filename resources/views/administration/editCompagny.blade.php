@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="text-center">
    <h1>Compagnie</h1>
</div>
<div class="container">
    <form action="/updateCompagnie" method="post">
        @csrf
        <input class="form-control mt-3" name="email" type="email" placeholder="email" value="{{$compagnie[0]->email}}">
        <input class="form-control mt-3" name="numero" type="text" placeholder="numero" value="{{$compagnie[0]->numero}}">
        <input class="form-control mt-3 mb-4" name="lieux" type="text" placeholder="adresse" value="{{$compagnie[0]->lieux}}">
       
        <div class="text-center mb-4">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control " name="description" id="exampleFormControlTextarea1" rows="3">{{$compagnie[0]->description}}</textarea>
        </div>

        <div class="text-center">
            <button class="btn btn-lg" type="submit">Update</button>
        </div>

    </form>
</div>

<script src="{{url('js/app.js')}}"></script>
@stop
