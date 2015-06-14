@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Upss!</strong> Tienes problemas con los siguientes campos.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif