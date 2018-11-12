@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="text-center m-5">
    <h1><strong>Membres</strong></h1>
</div>
<div class="container">
    <div class="row">
        @foreach ($users as $user)
        <div class="col-sm-3">
            <form action="/deleteUser/{{ $user->id }}" method="post">
                @csrf
                @if ( $user->roles_id == 3 )
                <div class="text-center">
                    <div class="card mr-4" style="width: 17rem;">
                        <div class="card-header">
                            {{ $user->name }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $user->email }}</li>
                            <li class="list-group-item">{{ $user->roles->type }}</li>
                            @if ($user->positions_id == null)
                            <p>Aucune position</p>
                            @else
                            <li class="list-group-item">{{ $user->positions->name }}</li>
                            @endif
                        </ul>
                        <div class="text-center">
                            <button class="btn btn-danger">Delete</button>
                            <a class="btn btn-warning text-white" href="/editUser/{{$user->id}}">Edit</a>
                        </div>
                    </div>
                </div>

                @endif
            </form>
        </div>
        @endforeach

    </div>
</div>


@stop
