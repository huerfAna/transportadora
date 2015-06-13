@extends('templates.base')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main view-control">
	<h2>Empleados</h2>
	<a href="{{ route('empleado.create') }}" class="btn btn-warning btn-fab btn-raised mdi-social-person-add material-button"></a>
	<div class="table-responsive">				
		{!! Form::model(Request::all(),['route' => 'empleado.index','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
		 	<div class="form-group">
		    {!! Form::select('tipo', config('options.types'),null) !!} 
	    	</div>
		    @include('administracion.partials.search');		   
	    {!! Form::close() !!}			
		<table class="table table-striped">
			<thead>
				<tr>
					<th>RFC</th>
					<th>RAZON</th>
					<th>CALLE</th>
					<th>TELEFONO</th>
					<th>CORREO</th>
					<th>TIPO</th>
					<th></th>
					<th></th>
				<tr>
			</thead>
			<tbody>
				@foreach($empleados as $emp)
				<tr>
					<td>{{$emp->code}}</td>
					<td>{{$emp->name}}</td>
					<td>{{$emp->address}}</td>
					<td>{{$emp->cphone}}</td>
					<td>{{$emp->email}}</td>
					@if($emp->type == 1)
					<td>Empleado</td>
					<td></td>
					@endif
					@if($emp->type == 2)
					<td>Chofer</td>
					<td></td>
					@endif
					<td><a href="{{ route('empleado.edit',$emp) }}">Editar</a></td>
				</tr>
				@endforeach	
			</tbody>
		</table>
	</div>
	<div class="text-center">{!!$empleados->appends(Request::all())->render()!!}</div>		
</div>
@endsection
