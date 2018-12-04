@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
<div class="text-center">
    <h2> <u>Profile edit</u> </h2>
</div>
@stop

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route ('updateProfile', $user->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="container">
        <div class="box-body">
            <div class="row">
                <div class="col-4">
                    <label for="newFirstName">Name</label>
                    <input type="text" class="form-control" name="newFirstName" placeholder="name" value="{{$user->name}}">
                </div>
                <div class="col-4">
                    <label for="newEmail">Email</label>
                    <input type="text" class="form-control" placeholder="email" name="newEmail" value="{{$user->email}}">
                </div>
                <div class="col-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="password" name="newPassword">
                </div>
            </div>
            <div class="mt-3">
                <label for="newBiography">Biography</label>
                <textarea name="newBiography" type="text" class="form-control" rows="2" style="height:20rem">{{$user->biography}}</textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary my-2" type="submit">save</button>
        </div>
    </div>

    

    {{-- <div class="container">
        <div class="row text-center">
            <div class="col-sm-4 offset-sm-4">
                <div class="card hovercard">
                    <div class="avatar">
                        <input class="btn my-3 border rounded border-labsPurple form-control-file" type="file" name="newImage"
                            id="newImage" value="">
                    </div>
                    <div class="info">
                        <label for="newFirstName">Name</label>
                        <input class="btn my-2 border rounded border-labsPurple form-control" type="text" name="newFirstName"
                            id="newFirstName" class="form-control" value="{{$user->name}}"> --}}
                        {{-- <input class="btn my-2 border rounded border-labsPurple" type="text" name="newLastName" id="newLastName"
                            class="form-control" value="{{$user->lastName}}"> --}}
                        {{-- <div class="desc">{{$user->positions->name}}</div>
                        <div class="desc">{{$user->roles->name}}</div> --}}
                        {{--
                    </div>
                    <div class="bottom">
                        <div class="desc">
                            <label for="newEmail">Email</label>
                            <input class="btn my-2 border rounded border-labsPurple form-control" type="text" name="newEmail"
                                id="newEmail" class="form-control" value="{{$user->email}}"></div>
                        <label for="password">Password</label>
                        <input class="btn my-2 border rounded border-labsPurple form-control" type="password" name="newPassword"
                            id="newPassword" class="form-control" value="{{$user->password}}">
                        <br>
                        <label for="newBiography">Biography</label>
                        <textarea name="newBiography" type="text" class="form-control" rows="2">{{$user->biography}}</textarea>
                    </div>
                    <button class="btn btn-primary my-2" type="submit">submit</button>
                </div>
            </div>
        </div>
    </div> --}}
</form>
@stop
