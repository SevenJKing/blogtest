<!DOCTYPE html>
<html>
    <head>
        <title>My Blog  @yield('title')</title> 
         <link href="{{url('/resource/css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body>  
        <div class="navigation"> 
            @yield('navigation')
        </div>
        <div class="container"> 
            @yield('container')
        </div>
    </body>
</html>
