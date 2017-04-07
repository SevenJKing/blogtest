<!DOCTYPE html>
<html>
    <head>
        <title>{{ts('admin.title')}}  @yield('title')</title> 
        <link href="{{url('/resource/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('/resource/css/common.css')}}" rel="stylesheet"> 
        <script src="{{url('/resource/js/jquery.min.js')}}"></script>  
        <script src="{{url('/resource/js/common.js')}}"></script>  
        <script src="{{url('/resource/js/bootstrap.min.js')}}"></script>  
    </head>
    <body>  
        <div class="right"> 
            <nav class="navbar navbar-default"  role="navigation">
                <div class=" container container-fluid">
                    @if(Auth::check())
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                            <span class="sr-only">{{ts('admin.title')}}</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/admin')}}">{{ts('nav.home')}}</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        @include('admin.common.topmenu')  
                    </div>
                </div>
                @endif
            </nav> 
            <div class="container"> 
                @yield('container')
            </div>
        </div>
    </body>
</html>
