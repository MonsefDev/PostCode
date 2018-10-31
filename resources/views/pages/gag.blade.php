
@extends('layout.app')
       
           
       @section('content')
       <style>
     .post-container {
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 50px;
            padding-right: 50px;
            padding-left: 20px;
            padding-right: 20px;
            margin-bottom: 10px;
            background-color: #ffffff;
            border-radius: 5px;
            border: 1px solid;
            border-color: #CCCCCC;
        }
        .blog-post {
        padding-bottom: 15px;
        }
        .blog-post-title {
    /* font-family: Source Code Pro, Courier New, Courier; */
    font-family: Roboto, Arial, Sans-serif;
    font-size: 22px;
    color: #222222;
        }
        .blog-post-content {
    margin-bottom: 15px;
    }
    .blog-post-content p {
    font-family: Roboto, Arial, Sans-serif;
}
.my-fb-btn {
    background-color: #4267B2;
    border-color: #4267B2;
}
.my-twitter-btn {
    background-color: #1DA1F2;
    border-color: #1DA1F2;
}
.my-email-btn {
    background-color: #1abc9c;
    border-color: #1abc9c;
}
.my-link-btn {
    background-color: #EEEEEE;
    border-color: #EEEEEE;
    color: #777777;
}
     </style>
         <div class="content">
            <div class="container">
             <h1> </h1>
             @if(count($posts) >0)         
               <div class="post-container">
                    <div class="blog-post">	
                        <h1 class="blog-post-title"><a href="https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior">Quand j’ai 10 ans d’expérience et qu’on m’envoie sur une mission de dev junior</a></h1>
                        <div class="blog-post-content">
                            <p><img src="https://ljdchost.com/zjl4oAg.gif" scale="0"><br></p>
                            <p class="phrase-sponso">Arrête de te faire balader, <b><span style="color: #fca60d;"><a href="http://bit.ly/talentio_feeds"><u>trouve le job qui va t’emballer !</u></a></span></b><br>
                            <a href="http://bit.ly/talentio_feeds" target="_blank" rel="noopener"><br>
                            <button class="btn btn-default jobs-btn" style="width: 300px; height: 46px; font-size: 18px;" type="button">Trouve le job qu’il te faut !</button><br>
                            </a></p>
                        </div>
                        <div class="social-share">	
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior" class="js-social-share" target="_blank" style="padding-right: 5px;">
                                <button type="button" class="btn btn-default my-fb-btn">
                                    <i class="fab fa-facebook fa-lg" aria-hidden="true" style="padding-right:7px;"></i>Partager sur Facebook
                                </button>
                            </a>    
                            <a href="https://twitter.com/intent/tweet?text=Quand j’ai 10 ans d’expérience et qu’on m’envoie sur une mission de dev junior&amp;url=https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior&amp;related=lesjoiesducode&amp;hashtags=lesjoiesducode&amp;lang=fr" target="_blank" style="padding-right: 5px;">
                                <button type="button" class="btn btn-default my-twitter-btn">
                                    <i class="fab fa-twitter fa-lg" aria-hidden="true" style="padding-right:7px;"></i>Twitter
                                </button>
                            </a>
                            <a href="mailto:?body=https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior&amp;subject=" style="padding-right: 5px;">
                                <button type="button" class="btn btn-default my-email-btn">
                                    <i class="far fa-envelope fa-lg" aria-hidden="true" style="padding-right:7px;"></i>E-mail
                                </button>
                            </a>    
                            <button type="button" title="Copier le lien" class="btn btn-default my-link-btn" data-clipboard-text="https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior" data-toggle="tooltip" data-placement="right">
                                <i class="fas fa-link fa-lg" aria-hidden="true"></i>
                            </button>
                        </div>

                    </div>
                </div>
           



                <div class="post-container">
                    <div class="blog-post">	
                        <h1 class="blog-post-title"><a href="https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior">Quand on nous force la main pour aller en réunion</a></h1>
                        <div class="blog-post-content">
                            <p><img src="https://ljdchost.com/G326lK4.gif" scale="0"><br></p>
                            <p class="phrase-sponso">Arrête de te faire balader, <b><span style="color: #fca60d;"><a href="http://bit.ly/talentio_feeds"><u>trouve le job qui va t’emballer !</u></a></span></b><br>
                            <a href="http://bit.ly/talentio_feeds" target="_blank" rel="noopener"><br>
                            <button class="btn btn-default jobs-btn" style="width: 300px; height: 46px; font-size: 18px;" type="button">Trouve le job qu’il te faut !</button><br>
                            </a></p>
                        </div>
                        <div class="social-share">	
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior" class="js-social-share" target="_blank" style="padding-right: 5px;">
                                <button type="button" class="btn btn-default my-fb-btn">
                                    <i class="fab fa-facebook fa-lg" aria-hidden="true" style="padding-right:7px;"></i>Partager sur Facebook
                                </button>
                            </a>    
                            <a href="https://twitter.com/intent/tweet?text=Quand j’ai 10 ans d’expérience et qu’on m’envoie sur une mission de dev junior&amp;url=https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior&amp;related=lesjoiesducode&amp;hashtags=lesjoiesducode&amp;lang=fr" target="_blank" style="padding-right: 5px;">
                                <button type="button" class="btn btn-default my-twitter-btn">
                                    <i class="fab fa-twitter fa-lg" aria-hidden="true" style="padding-right:7px;"></i>Twitter
                                </button>
                            </a>
                            <a href="mailto:?body=https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior&amp;subject=" style="padding-right: 5px;">
                                <button type="button" class="btn btn-default my-email-btn">
                                    <i class="far fa-envelope fa-lg" aria-hidden="true" style="padding-right:7px;"></i>E-mail
                                </button>
                            </a>    
                            <button type="button" title="Copier le lien" class="btn btn-default my-link-btn" data-clipboard-text="https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior" data-toggle="tooltip" data-placement="right">
                                <i class="fas fa-link fa-lg" aria-hidden="true"></i>
                            </button>
                        </div>

                    </div>
                </div>

                <div class="post-container">
                    <div class="blog-post">	
                        <h1 class="blog-post-title"><a href="https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior">Quand je vais chercher de l’aide dans le bureau et que je trouve seulement le stagiaire</a></h1>
                        <div class="blog-post-content">
                            <p><img src="https://ljdchost.com/EvilRemarkableHarlequinbug.gif" scale="0"><br></p>
                            <p class="phrase-sponso">Arrête de te faire balader, <b><span style="color: #fca60d;"><a href="http://bit.ly/talentio_feeds"><u>trouve le job qui va t’emballer !</u></a></span></b><br>
                            <a href="http://bit.ly/talentio_feeds" target="_blank" rel="noopener"><br>
                            <button class="btn btn-default jobs-btn" style="width: 300px; height: 46px; font-size: 18px;" type="button">Trouve le job qu’il te faut !</button><br>
                            </a></p>
                        </div>
                        <div class="social-share">	
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior" class="js-social-share" target="_blank" style="padding-right: 5px;">
                                <button type="button" class="btn btn-default my-fb-btn">
                                    <i class="fab fa-facebook fa-lg" aria-hidden="true" style="padding-right:7px;"></i>Partager sur Facebook
                                </button>
                            </a>    
                            <a href="https://twitter.com/intent/tweet?text=Quand j’ai 10 ans d’expérience et qu’on m’envoie sur une mission de dev junior&amp;url=https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior&amp;related=lesjoiesducode&amp;hashtags=lesjoiesducode&amp;lang=fr" target="_blank" style="padding-right: 5px;">
                                <button type="button" class="btn btn-default my-twitter-btn">
                                    <i class="fab fa-twitter fa-lg" aria-hidden="true" style="padding-right:7px;"></i>Twitter
                                </button>
                            </a>
                            <a href="mailto:?body=https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior&amp;subject=" style="padding-right: 5px;">
                                <button type="button" class="btn btn-default my-email-btn">
                                    <i class="far fa-envelope fa-lg" aria-hidden="true" style="padding-right:7px;"></i>E-mail
                                </button>
                            </a>    
                            <button type="button" title="Copier le lien" class="btn btn-default my-link-btn" data-clipboard-text="https://lesjoiesducode.fr/quand-jai-10-ans-dexperience-et-quon-menvoie-sur-une-mission-de-dev-junior" data-toggle="tooltip" data-placement="right">
                                <i class="fas fa-link fa-lg" aria-hidden="true"></i>
                            </button>
                        </div>

                    </div>
                </div>

















            </div>
        </div>








         
             @else
             <div class="alert alert-dismissible alert-danger">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>Oh  !</strong> <a href="#" class="alert-link">No posts !</a> and try submitting again.
             </div>  
             @endif  
     
             
     
       @endsection 

     

     
     