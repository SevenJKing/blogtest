@extends('admin.common.layout') 
@section('navigation')  
<div class="tab-content">
    <ul>
        <li><a href="{{url('/admin')}}">Home</a></li>
        @if(Auth::check())
        <li><a href="{{url('/admin/posts')}}" @if (Request::is('admin/post*')) class="active" @endif>Posts</a></li>
        <li><a href="{{url('/admin/catalogues')}}" @if (Request::is('admin/catalogue*')) class="active" @endif>Catalogues</a></li> 
        <li><a href="{{url('/admin/attachs')}}" @if (Request::is('admin/upload*')) class="active" @endif>Attachs</a></li> 
        <li><a href="{{url('/admin/users')}}" @if (Request::is('admin/user*')) class="active" @endif>Users</a></li> 
        @endif
    </ul>
</div>
@endsection
@section('container') 
@endsection

