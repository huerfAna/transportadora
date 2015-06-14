@extends('templates.base')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main view-control">
	<h2>Unidades</h2>
	<a href="{{ route('unidad.create') }}" class="btn btn-warning btn-fab btn-raised mdi-content-add material-button"></a>
	<div class="table-responsive">		
		{!! Form::model(Request::all(),['route' => 'unidad.index','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
		   @include('administracion.partials.search')
		{!! Form::close() !!}	
		<a href="{{ url('exportar') }}">Exportar</a>	
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
				@foreach($unidades as $uni)
				<tr>
					<td>{{$uni->plates}}</td>
					<td>{{$uni->name}}</td>
					<td>{{$uni->description}}</td>
					<td>{{$uni->trademark}}</td>
					<td>{{$uni->model}}</td>
					<td><a href="{{ route('unidad.edit',$uni) }}">Editar</a></td>
				</tr>
				@endforeach	
			</tbody>
		 </table>
	</div>		
	 <div class="text-center">{!!$unidades->render()!!}</div>		
</div>
@endsection
