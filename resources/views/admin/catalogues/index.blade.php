@extends('admin.common.layout')  
@section('container') 
<div class="row"> 
    <div class="container-fluid">
        <div class="row content">
            <div class="col-md-6">
                <h3>{{ts('catalogues')}}<small>>>{{ts('lists')}}</small></h3>
            </div>
        </div>
    </div>
    <div class="panel panel-default col-md-12">
        <div class="panel-body">
            @include('common.error')
            @include('common.success')
            <form id="frm_catalog" action="{{url('admin/catalogues')}}" method="post">
                <input type="hidden" name='_token' value="{{csrf_token()}}"/>
                <div class="form-group col-md-8">
                    <div class="form-group col-md-8">
                        <label>{{ts('newcatalogue')}}</label>  
                        <input type="text" class="form-control" placeholder="{{ts('newcatalogue')}}"
                               name="name"/>
                    </div>
                    <div class="form-group col-md-2" style="margin-top: 27px;">
                        <input type="submit" class="btn btn-info btn-sm" value="{{ts('create')}}"/>
                    </div>
                </div>
            </form>
        </div>
        <table id='tb-catalogues' class="table table-hover">
            <thead>
                <tr>
                    <th colspan='2' class="col-md-4">{{ts('title')}}</th>  
                    <th class="col-md-2">{{ts('postcount')}}</th>
                    <th class="col-md-2">{{ts('sort')}}</th>
                    <th>{{ts('actions')}}</th>
                </tr>
            </thead>
            @if(sizeof($catalogues)>0)
            @foreach($catalogues as $key=>$val)
            <tr id="catalog_{{$val->id}}" class="catalogues"  catalogid="{{$val->id}}">
                <th colspan='2'>{{$val->name}}</th>
                <th>{{isset($val->postcount)?$val->postcount:0}}</th>
                <th>{{$val->sortid}}</th>
                <th>
                    <button class="btn btn-info btn-sm" id="edit_catalog">{{ts('edit')}}</button>
                    <button class="btn btn-info btn-sm" onclick="showSubcatalog($(this))">{{ts('view').ts('subcatalogue')}}</button>
                    @if(empty($val->postcount))
                    <button class="btn btn-info btn-sm"  id="delete_subcatalog">{{ts('delete')}}</button>
                    @endif
                </th>
            </tr>
            <tr> 
                <th colspan='5'  id="subcatalog_{{$val->id}}" catalogid="{{$val->id}}" class="subcatalogues hidden"></th>
            </tr>
            @endforeach
            @endif
        </table>
        <div class="pagination-sm pull-right">
            {!! $catalogues->render() !!}
        </div>
    </div>
</div>
@endsection


@section('script')
<script>
    var url_subcatalogs = "{{url('admin/subcatalogs')}}";
    var url_catalogs = "{{url('admin/catalogues')}}";
    var _token = "{{csrf_token()}}"
    $(function () {
    });
</script>
<script type="text/javascript" src="{{url('resource/js/admin/catalogues.js')}}"></script>
@endsection
