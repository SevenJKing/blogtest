<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ --> 
        <title>{{ts('admin.title')}}   @yield('title')</title> 

        <!-- Bootstrap --> 
        <link href="{{url('/bootstrap-3.3.7/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('/resource/css/common.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{url('/jquery/jquery-3.2.0.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{url('/bootstrap-3.3.7/js/bootstrap.min.js')}}"></script> 
        <!--Datable-->
        <script type="text/javascript" language="javascript" src="{{url('/jquery/jquery.dataTables.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{url('/bootstrap-3.3.7/css/dataTables.bootstrap.css')}}">
        <script type="text/javascript" language="javascript" src="{{url('/bootstrap-3.3.7/js/dataTables.bootstrap.js')}}"></script>
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
        @yield('script')
    </body>
</html>
