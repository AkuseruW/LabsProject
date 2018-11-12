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

<section class="container">

    <div class="text-center">
        <h3>Admin</h3>


        @foreach ($users as $user)
        @if ( $user->roles_id == 1 )

        <div class="text-center" style="margin-left:50vh">
            <div class="card" style="width: 18rem;">
                <div class="card-header"><strong>
                        {{ $user->name }}
                    </strong>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>
                            {{ $user->email }}
                        </strong>
                    </li>

                    @if ($user->positions_id == null)
                    <p>
                        <strong>
                            Aucune position
                        </strong>
                    </p>
                    @else
                    <strong>
                        <li class="list-group-item">{{ $user->positions->name }}</li>
                    </strong>
                    </li>
                    @endif

                </ul>

            </div>
        </div>


        @endif
        @endforeach
    </div>
</section>

<section class="container mt-5">
    <div class="text-center">
        <h3>Editeur</h3>
    </div>

    <div class="row">
        @foreach ($users as $user)
        <div class="col-sm-3">
            <form action="/deleteUser/{{ $user->id }}" method="post">
                @csrf
                @if ( $user->roles_id == 2 )
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
</section>

<section class="container mt-5">
    <form action="/createUser" method="post">
        @csrf
        <div class="form-group">
            <h3>Name</h3>
            <input type="text" name="name" id="" class="form-control" placeholder="">

            <div class="row">
                <div class="col-6">
                    <h3>Email</h3>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-6">
                    <h3>Password</h3>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>

            <div class="row">

                <div class="col-6">
                    <h3>Role</h3>

                    <select class="form-control" name="role" id="">
                        @foreach ($roles as $key => $role)
                        <option value="{{ $role->id }}">{{$role->type}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-6">

                    <h3>Position</h3>
                    <div class="row">
                        <div class="col-11" style="padding-right:0">
                            <select class="form-control" name="position" id="">
                                @foreach ($positions as $key => $position)
                                <option value="{{ $position->id }}">{{$position->name}}</option>
                                @endforeach
                            </select>
                            <input class="form-control slidedown" name="newPos" type="text" placeholder="Create New Position">
                        </div>
                        <div class="col-1" style="padding:0">
                            <button type="button" class="btn js-toggle">+</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="text-center">
            <button class="btn btn-lg">Create User</button>
        </div>
    </form>
</section>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
    .slidedown {
        -webkit-transform: scaleY(0);
        -o-transform: scaleY(0);
        -ms-transform: scaleY(0);
        transform: scaleY(0);

        -webkit-transform-origin: top;
        -o-transform-origin: top;
        -ms-transform-origin: top;
        transform-origin: top;

        -webkit-transition: -webkit-transform 0.2s ease;
        -o-transition: -o-transform 0.2s ease;
        -ms-transition: -ms-transform 0.2s ease;
        transition: transform 0.2s ease;
    }

    .slidedown.active {
        -webkit-transform: scaleY(1);
        -o-transform: scaleY(1);
        -ms-transform: scaleY(1);
        transform: scaleY(1);
    }

</style>
@stop

@section('js')

<script>
    $('.js-toggle').click(function () {
        $('.slidedown').toggleClass('active');
    });

</script>

@stop
