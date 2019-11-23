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
					Orders
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<div class="kt-portlet__head-wrapper">
					<div class="kt-portlet__head-actions">
						
						&nbsp;
						<button type="button" class="btn btn-brand btn-elevate btn-icon-sm refresh-order">
							<i class="fas fa-sync-alt"></i>
							Refresh Orders
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="kt-portlet__body" id="dashboard-order">

			
		</div>
	</div>
</div>


@endsection
@section('script-dashboard')
  <script>
  	$(document).ready(function(){ 
  		 order_dashboard_view(); 
	});
	$(document).on('click','.refresh-order',function() { 
		order_dashboard_view();
	});
  	function order_dashboard_view() {
	  $.ajax({
		url: "{{route('ajax.orders')}}",
		type : 'get',
		dataType: "json",
		success: function(data ) {
		  $('#dashboard-order').html(data.response);
		  $("#kt_table_1").DataTable();
		},
	  });
	}
  </script>
@stop

