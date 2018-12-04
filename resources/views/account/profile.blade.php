@extends('adminlte::page')

@section('title', "Admin's home")

@section('content_header')
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
<div class="container">
    <div class="row">
        <div class="col-md-4">
    
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-responsive rounded-circle" src="{{ Storage::url('img/imageUsers/'.$user->imageUsers->url) }}"
                            alt="User profile picture">
                    </div>
    
                    <h3 class="profile-username text-center">{{ $user->name }}</h3>
    
                    <p class="text-muted text-center">{{$user->roles->type}}</p>
    
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Email</b> <a class="pull-right">{{$user->email}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Positions</b> <a class="pull-right">{{$user->positions->name}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Articles</b> <a class="pull-right">{{$user->articlesUser->count()}}</a>
                        </li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- /.box -->
        </div>
        <!-- About Me Box -->
        <div class="box box-primary col-md-8">
            <div class="box-header with-border">
                <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {{$user->biography}}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<div class="text-center">
    <a class="btn btn-warning" href="{{route ('editProfile', $user->id)}}">Change</a>
</div>

{{-- <div class="container">
    <div class="row text-center">
        <div class="col-sm-4 offset-sm-4">
            <div class="card hovercard">
                <div class="avatar">
                    <img src="{{ Storage::url('img/redimensionner/'.$user->imageUsers->url) }}" width="100%" alt="">
                </div>
                <div class="info">
                    <div class="title">
                        <h3>{{$user->name}}</h3>
                    </div>
                    <div class="desc">{{$user->positions->name}}</div>
                    <div class="desc">{{$user->roles->type}}</div>
                    <div class="desc">{{$user->biography}}</div>
                </div>
                <div class="bottom">
                    <div class="desc"><a href="mailto:{{$user->email}}">{{$user->email}}</a></div>
                </div>
                <a class="btn btn-warning" href="{{route ('editProfile', $user->id)}}">Change</a>
            </div>
        </div>
    </div> --}}
    {{-- @can('editor')
    <div class="text-center mt-5">
        <a class="mx-5 btn btn-primary" href="/admin-master/articles/{{$user->id}}">See articles</a>
        <a class="mx-5 btn btn-labsPurple" href="{{route('createPagePersonalArticles')}}">Write a new article</a>
    </div>
    @endcan --}}
</div>
@stop
