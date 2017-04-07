  
<ul class="nav navbar-nav"> 
    @if(Auth::check())
    <li @if (Request::is('admin/posts**')) class="active" @endif><a href="{{url('/admin/posts')}}">{{ ts('nav.posts') }}</a></li>
    <li @if (Request::is('admin/catalogues*')) class="active" @endif><a href="{{url('/admin/catalogues')}}">{{ ts('nav.catalogues') }}</a></li> 
    <li @if (Request::is('admin/attachs*')) class="active" @endif><a href="{{url('/admin/attachs')}}">{{ ts('nav.attachs') }}</a></li> 
    <li @if (Request::is('admin/tags*')) class="active" @endif><a href="{{url('/admin/tags')}}">{{ ts('nav.tags') }}</a></li> 
    @endif
</ul>  
<ul class="nav navbar-nav navbar-right">
    @if(Auth::check())
    <li><a >{{Auth::user()->name}}</a></li>
    <li><a href="{{url('/auth/logout')}}">{{ ts('nav.logout') }}</a></li>  
    @else 
    <li><a href="{{url('auth/login')}}">{{ ts('nav.login') }}</a></li>
    @endif
    <li class="dropdown">
        
         <a href="#" class="dropdown-toggle " data-toggle="dropdown">
             <button type="button" class="btn btn-info btn-xs" >{{ts('nav.'.session('localLang'))}}
                 <span class="caret"></span>
             </button></a> 
        <ul class="dropdown-menu">
            <li  class="langswitch"  value="zh"><a href="#">{{ts('nav.zh')}}</a></li>
            <li  class="langswitch"  value="en"><a href="#" >{{ts('nav.en')}}</a></li>  
        </ul>
    </li>
</ul>  
<script>
    $(function () {
        $('li.langswitch').on('click', function () {
            var lang = $(this).attr('value');
            if (lang) {
                $.get("{{url('/setlang')}}" + "/" + lang, function () {
                    window.location.reload();
                });
            }
        })
    })
</script> 

