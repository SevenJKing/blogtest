@extends('admin.common.layout')  
@section('container') 
    @include('admin.tags.topmenu')
    <div class="row">
        <div class="col-md-12">
            @include('common.error')
            <form action="{{url('/admin/tages')}}" method="post"  accept-charset="">
            <div ></div>
            </form>
        </div>
    </div>
@endsection

