
<table id='tb-subcatalogues' class="table table-hover"  catalogid='{{$pid}}'>
    @if(sizeof($catalogues)>0)
    @foreach($catalogues as $key=>$val)
    <tr id="catalog_{{$val->id}}"> 
        <th class="col-md-4">{{$val->name}}</th>
        <th class="col-md-2">{{isset($val->postcount)?$val->postcount:0}}</th>
        <th class="col-md-2">{{$val->sortid}}</th>
        <th>
            <button class="btn btn-info btn-sm">{{ts('edit')}}</button>
            @if(empty($val->postcount))
            <button class="btn btn-info btn-sm">{{ts('delete')}}</button>
            @endif
        </th>
    </tr>
    @endforeach
    @endif 
    <tr>
        <td colspan="4">
            <div class="form-group col-md-8 new_subcatalogue"  catalogid='{{$pid}}'>
                <div class="form-group col-md-8">
                    <label>{{ts('newsubcatalogue')}}</label>  
                    <input type="text" class="form-control" placeholder="{{ts('newsubcatalogue')}}" id='subname_{{$pid}}'/>
                </div>
                <div class="form-group col-md-2" style="margin-top: 27px;">
                    <input type="button" class="btn btn-info btn-sm" value="{{ts('create')}}" onclick="creatSubcatalog($(this))"/>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="pagination-sm pull-right">
                {!! $catalogues->render() !!}
            </div>
        </td>
    </tr>
</table>