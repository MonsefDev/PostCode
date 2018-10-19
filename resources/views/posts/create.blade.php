@extends('layout.app')
           
           
            @section('content')
           
           
{!! Form::open(['action' => 'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
 

   <div class=container>
   {{Form::submit('Ajouter',['class'=>'btn btn-primary btn-lg pull-right' ] ) }}
   <br>
<div class="form-group">
      {{Form::label('subject', '  Titre')}}
      {{Form::text('subject','' , ['class'=>'form-control'] ) }}
    </div>
 <div class="form-group">
      {{Form::label('firstname', 'Nom')}}
      {{Form::text('firstname','',['class'=>'form-control']) }}
    </div>

<div class="form-group">
      {{Form::label('lastname', 'Prenom')}}
      {{Form::text('lastname','',['class'=>'form-control' ]) }}
    </div>

<div class="form-group">
      {{Form::label('body', 'Discriptions')}}
      {{Form::textarea('body','',['class'=>'form-control' ,'id'=>'article-ckeditor']) }}
    </div>

   
 
<div class="form-group">
      
      {{Form::file('post_image', ['class'=>'btn ' ]) }}
    </div>   
 


   </div>


{!! Form::close() !!}
 
    
           @endsection



 

