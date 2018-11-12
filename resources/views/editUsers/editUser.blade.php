@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<section class="container">
<form action="/updateUser/{{ $users->id }}" method="post">
    @csrf
    <div class="form-group">
        <h3>Name</h3>
        <input type="text" name="name" id="" class="form-control" placeholder="" value="{{ $users->name }}">

        <div class="row">
            <div class="col-6">
                <h3>Email</h3>
                <input type="email" name="email" class="form-control" value="{{ $users->email }}">
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

$('.js-toggle').click( function() {
    $('.slidedown').toggleClass('active');
});

</script>

@stop






