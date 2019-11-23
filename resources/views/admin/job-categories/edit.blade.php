@extends('admin-layout.content')

@section('sidebar')



@section('content')

<div class="col-xl-6">

    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                   Edit Job Category
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form  action="{{route('job-categories.update',$job_category->id)}}" method="post" class="kt-form ajax-form" data-cb="job_category_edit">
            {{csrf_field()}}
            {{ method_field('PUT') }}
            <div class="kt-portlet__body">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" value="{{$job_category->name}}" name="name">
                    <span class="form-text text-muted">Please enter name</span>
                </div>
                <div class="form-group">
                    <label>Type:</label>
                    <input type="text" class="form-control" placeholder="Enter Type" value="{{$job_category->type}}" name="type">
                    <span class="form-text text-muted">Please enter type</span>
                </div>
                
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                   
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
    function job_category_edit(res,form) {
        res = JSON.parse(res);
        // if(res.type == 'success') {
        //     window.location = res.redirect_page;
        //     $('#paypal-button-container').css("pointer-events", "none");
        // }
    }
    </script>
@stop



