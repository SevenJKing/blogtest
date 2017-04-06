  
<ul class="nav navbar-nav"> 
    @if(Auth::check())
    <li @if (Request::is('admin/posts**')) class="active" @endif><a href="{{url('/admin/posts')}}">{{ ts('nav.posts') }}</a></li>
    <li @if (Request::is('admin/catalogues*')) class="active" @endif><a href="{{url('/admin/catalogues')}}">{{ ts('nav.catalogues') }}</a></li> 
    <li @if (Request::is('admin/attachs*')) class="active" @endif><a href="{{url('/admin/attachs')}}">{{ ts('nav.attachs') }}</a></li> 
    <li @if (Request::is('admin/tags*')) class="active" @endif><a href="{{url('/admin/tags')}}">{{ ts('nav.tags') }}</a></li> 
    @endif
</ul>  
<div class="nav navbar-nav navbar-right"> 
<button type="button"  class=" langswitch  btn btn-sm"  value="zh">{{ts('nav.zh')}}</button>
<button type="button "  class=" langswitch  btn btn-sm"   value="zh">  {{ts('nav.en')}} </button>
</div>  
<ul class="nav navbar-nav navbar-right">
     @if(Auth::check())
    <li><a >{{Auth::user()->name}}</a></li>
    <li><a href="{{url('/auth/logout')}}">{{ ts('nav.logout') }}</a></li>  
    @else 
    <li><a href="{{url('auth/login')}}">{{ ts('nav.login') }}</a></li>
    @endif
</ul>

