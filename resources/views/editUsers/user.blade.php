@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

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
                    {{-- <li class="list-group-item">{{ $user->roles->type }}</li> --}}

                    @if ($user->position == null)
                    <p>
                        <strong>
                            Aucune position
                        </strong>
                    </p>
                    @else
                    <li class="list-group-item">
                        <strong>
                            {{ $user->position }}
                        </strong>
                    </li>
                    @endif

                </ul>
                {{-- <div class="text-center">
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-warning">Edit</button>
                </div> --}}
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
            @if ( $user->roles_id == 3 )
            <div class="text-center">
                <div class="card mr-4" style="width: 17rem;">
                    <div class="card-header">
                        {{ $user->name }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $user->email }}</li>
                        {{-- <li class="list-group-item">{{ $user->roles_id->type }}</li> --}}
                        @if ($user->position == null)
                        <p>Aucune position</p>
                        @else
                        <li class="list-group-item">{{ $user->position }}</li>
                        @endif
                    </ul>
                    <div class="text-center">
                        <button class="btn btn-danger">Delete</button>
                        <button class="btn btn-warning">Edit</button>
                    </div>
                </div>
            </div>

            @endif
        </div>
        @endforeach

    </div>
</section>

<section class="container mt-5">
    <form action="" method="post">
        <div class="form-group">
            <h3>Name</h3>
            <input type="text" name="name" id="" class="form-control" placeholder="">

            <div class="row">
                <div class="col-6">
                    <h3>Email</h3>
                    <input type="email" class="form-control">
                </div>
                <div class="col-6">
                    <h3>Password</h3>
                    <input type="password" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h3>Role</h3>
                    <select class="form-control" name="" id="">
                        @foreach ($roles as $key => $role)
                        <option value="{{ $role->id }}">{{$role->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <h3>Position</h3>
                    <select class="form-control" name="" id="">
                        @foreach ($positions as $key => $position)
                        <option value="{{ $position->id }}">{{$position->name}}</option>
                        @endforeach
                    </select>
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
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
