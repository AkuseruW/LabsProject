@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 

@section('content')
{{-- Ajout Video --}}
<div class=" mt-5 text-center mb-5">
    <h1>Video Home Page</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">

            <div class="">
                @foreach ($video as $insertVideo)
                {!! $insertVideo->video !!}
                @endforeach
            </div>
        </div>
        <div class="col-6 mt-auto mb-auto">
            <h1>Changer la video </h1>
            <form action="/insertVideo" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach ($video as $insertVideo)
                <input style="height:12vh" class="form-control form-control" name="video" type="text" value=" {{ $insertVideo->video }} " required>
                @endforeach
                <div class="text-center">
                    <button class="btn btn-lg mt-3" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Fin Ajout Video --}}
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
