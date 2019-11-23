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
									<a href="#" class="btn btn-info btn-elevate btn-pill btn-elevate-air btn-sm "><i class="fa fa-trash"></i></a>

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

