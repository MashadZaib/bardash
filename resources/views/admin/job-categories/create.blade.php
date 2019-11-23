@extends('admin-layout.content')

@section('sidebar')



@section('content')

<div class="col-md-12">

    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Job Category
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form  action="{{route('job-categories.store')}}" method="post" enctype="multipart/form-data" class="kt-form ajax-form" data-cb="job_category_add"><!-- Form row -->
            {{csrf_field()}}
            <div class="kt-portlet__body">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" placeholder="Enter full name" name="name">
                    <span class="form-text text-muted">Please enter name</span>
                </div>
                <div class="form-group">
                    <label>Type:</label>
                    <input type="text" class="form-control" placeholder="Enter Type" name="type">
                    <span class="form-text text-muted">Please enter type</span>
                </div>
                
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <input type="submit" value="Submit" class="btn btn-primary"/> 
                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
</div>

<!--end::Portlet-->

<!--begin::Portlet-->




@endsection
@section('script-dashboard')
    <script type="text/javascript">
    function job_category_add(res,form) {
        if(res.type =='success') {
            toastr_msg();
            toastr.success(res.msg);
            window.setTimeout(function(){
                window.location.href = '{{route("job-categories.index")}}';
            },3000);
        } else if(res.type =='error') {
            console.log();
            toastr_msg();
            toastr.error(res.msg);
        }
    }
    </script>
@stop



