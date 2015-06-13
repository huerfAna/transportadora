@extends('templates.base')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main view-control">
	<h2>Remolques</h2>
	<a href="{{ route('remolque.create') }}" class="btn btn-warning btn-fab btn-raised mdi-content-add material-button"></a>
	<div class="table-responsive">		
		{!! Form::model(Request::all(),['route' => 'remolque.index','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
		   @include('administracion.partials.search')
		{!! Form::close() !!}	
		<a href="{{ url('remolque/exportar') }}">Exportar</a>	
		<table class="table table-striped ">
		 	<thead>
				<tr>
					<th>PLACAS</th>
					<th>NOMBRE</th>
					<th>DESCRIPCION</th>
					<th>MARCA</th>
					<th>MODELO</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($remolques as $rem)
				<tr>
					<td>{{$rem->plates}}</td>
					<td>{{$rem->name}}</td>
					<td>{{$rem->description}}</td>
					<td>{{$rem->trademark}}</td>
					<td>{{$rem->model}}</td>
					<td><a href="{{ route('remolque.edit',$rem) }}">Editar</a></td>
				</tr>
				@endforeach	
			</tbody>
		 </table>
	</div>		
	 <div class="text-center">{!!$remolques->render()!!}</div>		
</div>
@endsection
