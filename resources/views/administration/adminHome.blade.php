@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
{{-- @include('../partialsAdmin/membre') --}}
@include('../partialsAdmin/post')

{{-- <div class="row">

    @foreach ($admin as $adm)
    <div class="col-xs-3">
            <div class="card">
                <div class="card-body">
                    <img src="" alt="">
                    <h3 class="card-title">{{ $adm->name }}</h3>
                    <p class="card-text">{{ $adm->positions->name }}</p>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($users as $user)
    @if ( $user->positions_id != null )
    <div class="col-xs-3">
        <div class="card">
            <div class="card-body">
                <img src="" alt="">
                <h3 class="card-title">{{ $user->name }}</h3>
                <p class="card-text">{{ $user->positions->name }}</p>
            </div>
        </div>
    </div>
    @endif
    @endforeach

</div> --}}

@stop
