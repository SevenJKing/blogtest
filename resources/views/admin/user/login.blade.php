@extends('admin.common.layout') 
@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ts('nav.login')}}</div>
                <div class="panel-body">
                    @include('common.error')
                    <form class="form-horizontal" role="form" method="POST"   action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token"  value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label class="col-lg-4 control-label">{{ts('auth.username')}}</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" autofocus/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-4 control-label">{{ts('auth.password')}}</label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" name="password"  value="{{old('password')}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">{{ts('auth.rememberme')}}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">{{ts('auth.login')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

