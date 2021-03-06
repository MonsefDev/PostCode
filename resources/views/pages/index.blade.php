
@extends('layout.app')

       
             @section('content')
             @include('includes.slider') 
            <div class="content">
                <div class="title m-b-md">
                <div class="container">
                    <!-- /#work -->

<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">DERNIÈRE POSTE</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
            </p>
        </div>
  
        <div class="row">

          
          @foreach($posts as $post)
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                    <img src="{{ URL::to('/') }}/images/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:100% !important;height:50% !important;" > 
                        <div class="overlay">
                            <div class="buttons">
                               <!--<a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>-->
                                <a target="_blank" href="/posts/{{$post->id}}" id="edit">Details</a>
                               
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h3>
                    <a href="/posts/{{$post->id}}">
                    {{$post->subject}}
                    </a>
                    </h3>
                    <p>
                   
                    </p>
                    </figcaption>
                </figure>
            </div>
            @endforeach
           
            
            
       
            </div>
        </div>
    </div>
</section>  
        @include('includes.footer') 
    </div>
    </div>
    </div>
    @endsection