@extends('admin.common.layout') 
@section('container')
<div class="content margin-50 center-block">
    @extends('common.error')
    <form class="form-horizontal" role="form" method="POST"   action="{{ url('/auth/login') }}">
        <input type="hidden" name="_token"  value="{{csrf_token()}}"/>
        <div class="form-group">
            <label class="col-lg-4 control-label">User Name</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="name" value="{{old('name')}}" autofocus/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label">Password</label>
            <div class="col-lg-6">
                <input type="password" class="form-control" name="password"  value="{{old('password')}}" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</div>    
@endsection

