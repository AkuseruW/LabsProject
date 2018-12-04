@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs text-center">
        <li class="active ml-5 mr-5"><a href="#articles" data-toggle="tab">
                <h4>Articles</h3>
            </a>
        </li>

        <li class="ml-5 mr-5"><a href="#tags" data-toggle="tab">
                <h4>Tags</h4>
            </a>
        </li>

        <li class="ml-5 mr-5"><a href="#categories" data-toggle="tab">
                <h4>Categories</h4>
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="active tab-pane" id="articles">
            <section class="container mt-5">
                <!-- Post -->
                @include('../partialsAdmin/post')
                <!-- /.post -->
            </section>
        </div>
        
        <div class="tab-pane" id="tags">
            <section class="container mt-5">
                @include('../partialsAdmin/tagAttente')
            </section>
        </div>
        
        <div class="tab-pane" id="categories">
            <section class="container mt-5">
                @include('../partialsAdmin/categorieAttente')
            </section>
        </div>
    </div>
    <!-- /.tab-content -->
</div>
<script src="{{url('js/app.js')}}"></script>
@stop
