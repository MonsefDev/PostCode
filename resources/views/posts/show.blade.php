@extends('layout.app')
            
  @section('content')
  <div class="container">
    <div class="row">
    <div class="panel panel-primary ">
      <div class="panel-heading"><h3 class="panel-title">{{$post->subject}}</h3></div><br>
            <div class="panel-body">
              @if(!Auth::guest())
              @if(Auth::user()->id == $post->user_id)
       
                {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST']) !!}
                  {{Form::hidden('_method' ,'DELETE') }}
                  {{Form::submit('Supprimer',['class'=>"pull-right btn btn-danger btn-lg"]) }}
                {!! Form::close() !!}
              @endif
            @endif  
              <a class="btn btn-primary btn-lg pull-right" href="/posts/{{$post->id}}/edit" id="edit" >Modifer</a>
              {{--  <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:100%,height:50%" >   --}}
            
              <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" >   
              {{--<video width="400" controls>
                <source src="{{asset('images/js.mp4')}}" type="video/mp4">
                <source src="{{asset('images/js.mp4')}}" type="video/ogg">
                Your browser does not support HTML5 video.
              </video>--}}

              <h2>  </h2> 
              <p> {!!$post->body!!}</p>
              <span class="label label-danger" >created at : {{$post->created_at}}</span>
              <span class="label label-info">  par {{$post->user->name}}</span>
              <a class="pull-right" href="/posts" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left" id="icon"></i></a>
            </div>
      </div>
    </div> 
  </div>
  @endsection

