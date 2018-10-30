@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')

<div class="container">

    <form action="/createCardsHomePage" method="post">
        <div>
            <h4>Titre</h4>
            <input name="titreHomeCards" type="text">
        </div>

        <div>
            <h4>Description</h4>
            <textarea name="descriptionHomeCards" id="" cols="30" rows="10">
            </div>

            </textarea>

            <div>
                <h4>Icone</h4>
                <input type="file" name="iconeHomeCards" id="">
            </div>
    </form>

</div>

@stop
