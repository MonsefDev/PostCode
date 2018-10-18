<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CodePoste </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">

        <!-- Styles -->

    <link href="{{asset('layouts/style.css')}}" rel="stylesheet">
    <link href="{{asset('layouts/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
   
    <link href="{{asset('layouts/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('layouts/animate.css')}}" rel="stylesheet">
    <link href="{{asset('layouts/slider.css')}}" rel="stylesheet">
    <link href="https://bootswatch.com/lumen/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
 
    



<style>
.navbar.navbar-inverse {
    
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
 

</style>



        
    </head>
    
    <body>
      
      @include('includes.navbar')
      @include('includes.messages')
 @yield('content')

    <script type="text/javascript" src="{{asset('js/jquery.app.js')}}"></script>
    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
 
    </body>
</html>
