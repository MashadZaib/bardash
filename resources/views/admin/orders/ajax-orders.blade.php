<!--begin: Datatable -->
<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
	<thead>
		<tr>
			<th>Employer Name</th>
			<th>Candidate Name</th>
			<th>Job Category</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($orders as $order)
		<tr>
			<td>{{ get_employer_name($order->fk_employer_id) }}</td>
			<td>{{ get_candidate_name($order->fk_candidate_id) }}</td>
			<td>{{$order->fk_employer_id}}</td>
			<td>
				<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
					<button type="button" class="btn btn-success btn-elevate btn-pill btn-elevate-air btn-sm">Shift Summary</button>
					<button type="button" class="btn btn-info btn-elevate btn-pill btn-elevate-air btn-sm">Pay Summary</button>

				</div>
			</td>
		</tr>
		@endforeach


	</tbody>
</table>

			<!--end: Datatable -->