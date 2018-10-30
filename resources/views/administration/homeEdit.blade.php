@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="text-center mb-5">
    <h3>Creation de nouvelle carte <span><a href="/newCards"><span class="text-danger">ici</span></a></span></h3>
</div>

<div class=" pb-5 row">
    <form class="col-3" action="" method="POST" enctype="multipart/form-data">
        {{-- <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger btn-lg">Delete</button>
            <a href="" type="btn" class="btn btn-warning btn-lg">Edit</a>
        </div> --}}
        <div class="lab-card">
                <div class="icon">
                    <i class="flaticon-037-idea"></i>
                </div>
                <h2>SMART MARKETING</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
            </div>
    </form>
</div>

<script src="/ckeditor/ckeditor.js"></script>
<form action="/editText" method="POST" enctype="multipart/form-data">

    @csrf

    <textarea name="editor" id="editor1" rows="10" cols="80">

    </textarea>

    <script>
        CKEDITOR.replace('editor');
    </script>

    <div class="text-center pt-5">
        <button class="btn btn-lg" type="submit">Send</button>
    </div>

</form>


@stop
