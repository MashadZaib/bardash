@if ($message = Session::get('success'))
	<div class="alert alert-solid-success alert-bold">
		<div class="alert-text">	
	        <strong>{{ $message }}</strong>
	    </div>
	</div>
@endif

@if ($message = Session::get('error'))
	<div class="alert alert-solid-danger alert-bold">
		<div class="alert-text">
	        <strong>{{ $message }}</strong>
	    </div>
	</div>
@endif

@if ($message = Session::get('warning'))
	<div class="alert alert-solid-warning alert-bold">
		<div class="alert-text">
			<strong>{{ $message }}</strong>
		</div>
		
	</div>
@endif

@if ($message = Session::get('info'))
	<div class="alert alert-solid-info alert-bold">
		<div class="alert-text">
		<strong>{{ $message }}</strong>
		</div>
	</div>
@endif

@if ($errors->any())
	<div class="alert alert-solid-danger alert-bold">
		<div class="alert-text">	
			@foreach ($errors->all() as $error)
				<div>{{$error}}</div>
			@endforeach
		</div>
	</div>
@endif