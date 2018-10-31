
@extends('layout.app')
  @section('content')
       <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contacter avec moi</h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                    
                    </p>
                    <div class="contact-form">
                        <form id="contact-form" method="#" action="#" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Votre Nom" class="form-control" name="name" id="name">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Votre Email" class="form-control" name="email" id="email" >
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input type="text" placeholder="Sujet" class="form-control" name="subject" id="subject">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                            </div>
                            
                            <div id="success" class="success">
                            Je vous remercie. Le facteur est en route :)
                            </div>
                            
                            <div id="error" class="error">
                            Désolé, je ne sais pas ce qui s'est passé. Essayer plus tard :(
                            </div>
                            
                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                            </div>                      
                        </form>
                    </div>
                </div>
            </div>
          
        </div>
       
    </div>
</section>  





            @include('includes.footer') 
  @endsection