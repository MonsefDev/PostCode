@extends('layout.app')
       
           
  @section('content')
   
    <div class="content">
      <div class="container">
        <h1> </h1>
        @if(count($posts) >0)         
          <div class="row container">
            @foreach($posts as $post)
              <div class="col-sm-4">                
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title"> {{$post->subject}}</h3>
                  </div>
                  <div class="panel-body">
                    <h2></h2>              
                      <a class="" href="/posts/{{$post->id}}" > 
                        <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:50%,height:50%" > 
                      </a>
                    <span class="label label-danger"> Créer à : {{$post->created_at}}  </span>
                    <span class="label label-info pull-right">par: {{$post->user->name}}</span>                
                  </div>
              </div>
             </div>
             @endforeach
         
          </div>
          <div class="d-flex justify-content-center" style="text-align:center;">{{$posts->links()}}</div>
      </div>
      
    </div>
        @else
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Oh  !</strong> <a href="#" class="alert-link">No posts !</a> and try submitting again.
        </div>  
        @endif  

  @endsection

