@extends('master')

@section('title','|Create new Posts')
@section('home')

@include('partials.header')
<div class="container marketing">
<div class="container" style="padding-top: 100px;">

      <div class="blog-header">
        <h1 class="blog-title">Create new Post</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">
   @include('partials.message')
       <hr>
       {!! Form::open(array('route'=>'posts.store','data-parsley-validate'=>'')) !!}
       		{{Form::label('title','Title: ')}}
       		{{Form::text('title',null, array('class'=>'form-control','required'=>''))}}
       		{{Form::label('body','Post Body:')}}
       		{{Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}
       		{{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
       {!! Form::close() !!}
      </div><!-- /.row -->

    </div>
    @include('partials.footer')

    </div>
@endsection