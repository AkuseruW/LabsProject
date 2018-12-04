@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<h1 class='mb-5'>Commentaire Article</h1>
<ul class="timeline timeline-inverse">

    <!-- timeline time label -->
    <!-- <li class="time-label">
        <span class="bg-red">
            10 Feb. 2014
        </span>
    </li> -->
    <!-- /.timeline-label -->
    <!-- timeline item -->
@foreach($comArticle as $com) 
<form action="/deleteCom/{{$com->id}}" method="post">
    <li>
        <!-- <i class="fa fa-envelope bg-blue"></i> -->
        <i class="fa fa-user bg-blue"></i>

        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o pr-2"></i>{{ $com->created_at->format('d M, Y ') }}</span>

            <h5 class='pl-4 pt-4'> {{ $com->name }} | {{$com->email}} </h5>

            <div class="timeline-body pl-5">
            <p style='font-size: 20px'>
                {{$com->message}}
            </p>
            </div>
            <div class="timeline-footer text-center">
                <a class="btn btn-danger btn-xs text-white">Delete</a>
            </div>
        </div>
    </li>
</form>
@endforeach

</ul>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');

</script>
@stop
