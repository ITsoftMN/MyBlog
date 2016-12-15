
@extends('master')
@section('home')

@include('partials.header')

<div class="container marketing">
<div class="container" style="padding-top: 100px;">
    @include('partials.message')
      <div class="row">
      <!-- form start-->
        {!!Form::model($post,['route' => ['posts.update',$post->id],'method'=>'PUT'])!!}
          <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null,['class' => 'form-control']) }}
              {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body',null,['class' => 'form-control']) }}
          
          </div>
          <div class="col-md-4"> 
             <div class="well">
                <dl class="dl-horizontal">
                  <dt>Created At:</dt>
                  <dd>{!! date('M j, Y h:ia',strtotime($post->created_at)) !!}</dd>
                </dl>
                 <dl class="dl-horizontal">
                  <dt>Last Updated At:</dt>
                  <dd>{!! date('M j, Y h:ia',strtotime($post->updated_at)) !!}</dd>
                </dl>
                <hr>

                <div class="row">
                    <div class="col-sm-6">
                      {!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block')) !!}
                        
                    </div>
                    <div class="col-sm-6">
                        {!! Form::submit('Save Changes',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                </div>
             </div>  
          </div>
        {!! Form::close() !!}  
         <!-- form end-->
      </div>
    </div>
    @include('partials.footer')

    </div>

@endsection