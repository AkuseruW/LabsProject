@extends('adminlte::page')

@section('title', 'Dashboard')

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
{{-- Edit Text --}}

<div class="">
    <div class="text-center">
        <h1>GET IN THE LAB AND DISCOVER THE WORLD</h1>
    </div>

    <script src="/ckeditor/ckeditor.js"></script>
    <div class="container">
        <form action="/editText" method="POST" enctype="multipart/form-data">

            @csrf

            <textarea name="editor" id="editor1" rows="10" cols="80" required>
                    @foreach ($text as $txt)
                    {{ $txt -> text }}
                    @endforeach
                </textarea>

            <script>CKEDITOR.replace('editor');</script>

            <div class="pt-2">
                <button class="btn btn-lg" type="submit">Send</button>
            </div>

        </form>
    </div>

    {{-- Fin Edit Text --}}

    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script>
        console.log('Hi!');

    </script>
    @stop
