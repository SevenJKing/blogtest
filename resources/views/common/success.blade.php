@if (isset($success))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>
            <i class="fa fa-check-circle fa-lg fa-fw"></i>{{ts('success')}}. 
        </strong>
        {{ $success }}
    </div>
@endif

