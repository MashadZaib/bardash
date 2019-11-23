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
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
          toastr.success(res.msg);
            // window.setTimeout(function(){location.reload()},3000);
        }
    }
    </script>
@stop



