
<table id='tb-subcatalogues' class="table table-striped">
    <thead>
        <tr>
            <th>&nbsp;</th>  
            <th>{{ts('title')}}</th>  
            <th>{{ts('postcount')}}</th>
            <th>{{ts('sort')}}</th>
            <th>{{ts('actions')}}</th>
        </tr>
    </thead>
    @if(sizeof($subcatalogues)>0)
        @foreach($subcatalogues as $key=>$val)
        <tr id="catalog_{{$val->id}}">
            <th>&nbsp;</th>  
            <th>{{$val->name}}</th>
            <th>{{isset($val->postcount)?$val->postcount:0}}</th>
            <th>{{$val->sortid}}</th>
            <th>
                <button class="btn btn-info btn-sm">{{ts('edit')}}</button>
                @if(empty($val->postcount))
                    <button class="btn btn-info btn-sm">{{ts('delete')}}</button>
                @endif
            </th>
        </tr>
        @endforeach
    @endif
    <div class="form-group col-md-8">
        <div class="form-group col-md-8">
            <label>{{ts('newcatalogue')}}</label>  
            <input type="text" class="form-control" placeholder="{{ts('newcatalogue')}}"/>
        </div>
        <div class="form-group col-md-2" style="margin-top: 27px;">
            <input type="submit" class="btn btn-info btn-sm" value="{{ts('create')}}"/>
        </div>
    </div>
</table>