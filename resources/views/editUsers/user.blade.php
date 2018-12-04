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
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs text-center">
        <li class="active ml-5 mr-5"><a href="#activity" data-toggle="tab">
                <h4>User</h3>
            </a></li>
        <li><a href="#settings" data-toggle="tab">
                <h4>Create User</h4>
            </a></li>
    </ul>
    <div class="tab-content">
        <div class="active tab-pane" id="activity">
            <!-- Post -->
            <div class="row">
                @foreach ($users as $user)
                <div class="col-md-4">
                    <form action="/deleteUser/{{ $user->id }}" method="post">
                        @csrf
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-aqua-active">
                                <h3 class="widget-user-username">{{ $user->name }}</h3>
                                @if ($user->positions_id == null)
                                <h5 class="widget-user-desc">Aucune position</h5>
                                @else
                                <h5 class="widget-user-desc">{{ $user->positions->name }}</h5>
                                @endif
                            </div>
                            <div class="widget-user-image">
                                <img class="rounded-circle" src="{{ Storage::url('img/imageUsers/'.$user->imageUsers->url) }}" alt="User Avatar" height="128" width="128">
                            </div>
                            <div class="box-footer">
                                {{-- <div class="row"> --}}
                                        @if($user->positions_id != null)
                                    <div>
                                        <div class="description-block">
                                        <h5 class="description-header">{{$user->articlesUser->count()}} Articles</h5>
                                            {{-- <span class="description-text">Article(s)</span> --}}
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    @else
                                        <div>
                                        <div class="description-block">
                                        <h5 class="description-header">{{$user->roles->type}}</h5>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    @endif

                                    <!-- /.col -->
                                {{-- </div> --}}
                                <!-- /.row -->
                                <div class="text-center">
                                    <button class="btn btn-danger">Delete</button>
                                    <a class="btn btn-warning text-white" href="/editUser/{{$user->id}}">Edit</a>
                                </div>
                            </div>
                        </div>

                        <!-- /.widget-user -->
                </div>
                @endforeach

            </div>
            <!-- /.post -->

            </form>

        </div>
        <!-- /.tab-pane -->

        <!-- /.tab-pane -->

        <div class="tab-pane" id="settings">
            <section class="container mt-5">
                <form action="/createUser" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <h3>Name</h3>
                        <input type="text" name="name" id="" class="form-control" placeholder="" required>

                        <div class="row">
                            <div class="col-6">
                                <h3>Email</h3>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-6">
                                <h3>Password</h3>
                                <input type="password" name="password" class="form-control" required>
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
                        <div class="text-center">
                            <input type="file" name="image" id="" required>
                        </div>

                    </div>
                    <div class="text-center">
                        <button class="btn btn-lg">Create User</button>
                    </div>
                </form>
            </section>
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>
<!-- /.nav-tabs-custom -->
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
