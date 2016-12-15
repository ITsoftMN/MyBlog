@extends('master')
@section('home')

@include('partials.header')
<div class="container marketing">
    <div class="container" style="padding-top: 100px;">
      <div class="row">
          <div class="col-md-10">
              <h1>All Posts</h1>

          </div>
          <div class="col-md-2">
              <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create new Post</a>
          </div>
          <hr>
      </div> 
      <div class="row">
        <div class="col-md-12">
          @foreach($post as $p)
          <div class="col-md-10">
            <div class="post-detail" id="callout-btn-group-justified-dbl-border"> 
              <h4>{!! $p->title !!}</h4> 
                <p> {!!substr($p->body,0,50)!!} {{strlen($p->body)> 50 ? "..." : ""}} </p>
            </div>
          </div>
          <div class="col-md-2">
            <a href="{{ route('posts.show', $p->id) }}" class="btn btn-default btn-sm">View</a> 
            <a href="{{ route('posts.edit', $p->id) }}" class="btn btn-success btn-sm">Edit</a> 
          </div>
          
          @endforeach
        </div>
      </div>
    </div>
    @include('partials.footer')
</div>
@endsection