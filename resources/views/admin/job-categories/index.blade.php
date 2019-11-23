@extends('admin-layout.content')

@section('sidebar')

@section('content')

<div class="col-xl-6">
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-label">
				<span class="kt-portlet__head-icon">
					<i class="fa fa-tasks"></i>
				</span>
				<h3 class="kt-portlet__head-title">
					Job Categories
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<div class="kt-portlet__head-wrapper">
					<div class="kt-portlet__head-actions">
						
						&nbsp;
						<a href="{{route('job-categories.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
							<i class="la la-plus"></i>
							New Job Category
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">

			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
						<th>Name</th>
						<th>Type</th>
						
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($job_categories as $job_category)
						<tr>
							<td>{{$job_category->name}}</td>
							<td>{{$job_category->type}}</td>
							
							<td>
								<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
									<a href="{{route('job-categories.edit', ['job_category' => $job_category->id])}}" class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm"><i class="fa fa-edit"></i></a>
									<button type="button" class="btn btn-info btn-elevate btn-pill btn-elevate-air btn-sm delete-btn" data-id="{{$job_category->id}}" ><i class="fa fa-trash"></i></button>

								</div>
							</td>
						</tr>
					@endforeach
					

				</tbody>
			</table>

			<!--end: Datatable -->
		</div>
	</div>
</div>


@endsection
@section('script-dashboard')
    <script type="text/javascript">
    	$(document).ready(function() {
		 	$(document).on('click', '.delete-btn', function (event) {
		        var job_cat_id = $(this).attr('data-id');
				swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Yes, delete it!',
					cancelButtonText: 'No, cancel!',
					reverseButtons: true
				}).then(function(result){
					if (result.value) {
						  $.ajax({
		                    url:"job-categories/"+job_cat_id,
		                    type:'DELETE',
		                    data: {
	                            id: job_cat_id,
	                            '_token':$('meta[name=csrf-token]').attr('content')
                        	},
		                    dataType:'json',
		                    success:function(status){
		                        if(status.type=='success'){
		                            swal.fire({title: "Success!", text: status.msg, type: "success"}).then((result) => {
									// Reload the Page
									location.reload();
									});
		                        } else if(status.type=='error'){

		                            swal.fire("Error", status.msg, "error");
		                        }
		                    }
		                });	
					} else if (result.dismiss === 'cancel') {
	                    swal.fire(
	                        'Cancelled',
	                        'No action performed :)',
	                        'error'
	                    )
                	}
				});
		    });
	    });
 	</script>
@stop

