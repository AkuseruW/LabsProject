@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="text-center">
    <h1>Compagnie</h1>
</div>

 <div class="row mt-5">
  <div class="col-md-6 offset-md-3">
      <div class="text-center">
        <div class="card" style="width: 100vh; height: 80vh">
          <div class="card-body">
            <h1 class="card-title">{{$compagnie[0]->description}}</h1>
          <h1 class="card-subtitle mb-2 text-muted mt-5">{{$compagnie[0]->lieux}}</h1>
            <h1 class="card-text mt-5">{{$compagnie[0]->numero}}</h1>
            <h1 class="mt-5">
                <a href="#" class="card-link">{{$compagnie[0]->email}}</a>
            </h1>
        <div class="text-center mt-5"><a class="btn btn-lg btn-warning" href="/editCompagny/{{$compagnie[0]->id}}">Edit</a></div>
          </div>
        </div>
    </div>
  </div>
</div>


<script src="{{url('js/app.js')}}"></script>
@stop
