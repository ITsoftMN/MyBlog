@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
	<strong>Success:</strong> {{Session::get('success')}}
	</div>
@endif

@if(count($errors)>0)
	<div  class="alert alert-danger" role="alert">
		<strong>Error:</strong>
		<ul>
			@foreach ($errors->all() as $er)
				<li>{{$er}}</li>
			@endforeach	
		</ul>
	</div>
@endif