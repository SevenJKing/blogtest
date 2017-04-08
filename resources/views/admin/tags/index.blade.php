@extends('admin.common.layout')  
@section('container') 
    @include('admin.tags.topmenu')
    <div class="row">
        <div class="col-md-12">
            @include('common.error')
            @include('common.success')
            <table id='tb-tags' class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>{{ts('tagcode')}}</th>
                        <th>{{ts('tagtitle')}}</th>
                        <th class="hidden-sm">{{ts('Subtitle')}}</th>
                        <th class="hidden-md">{{ts('tagicon')}}</th>
                        <th class="hidden-md">{{ts('description')}}</th>
                        <th class="hidden-md">{{ts('layout')}}</th>
                        <th class="hidden-sm">{{ts('actions')}}</th>
                    </tr>
                </thead>
                @if(sizeof($tags)>0)
                    @foreach($tags as $key=>$val)
                    <tr>
                        <th>{{ts('tagcode')}}</th>
                        <th>{{ts('tagtitle')}}</th>
                        <th class="hidden-sm">{{$val->Subtitle}}</th>
                        <th class="hidden-md">{{$val->page_image}}</th>
                        <th class="hidden-md">{{$val->meta_description}}</th>
                        <th class="hidden-md">{{$val->layout}}</th>
                        <th class="hidden-sm"></th>
                    </tr>
                    @endforeach
                @endif
            </table>
            
        </div>
    </div>
@endsection


@section('script')
<script>
        $(function() {
            $("#tb-tags").DataTable({
            });
        });
</script>
@endsection
