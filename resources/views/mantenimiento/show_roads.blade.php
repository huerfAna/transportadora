@extends('templates.base')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main view-control">
	<h2>Rutas</h2>
	<a href="{{ route('ruta.create') }}" class="btn btn-warning btn-fab btn-raised mdi-content-add material-button"></a>
	<div class="table-responsive">		
		{!! Form::model(Request::all(),['route' => 'ruta.index','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
		   @include('administracion.partials.search')
		{!! Form::close() !!}	
	
		<table class="table table-striped ">
		 	<thead>
				<tr>
					<th>#</th>
					<th>ORIGEN</th>
					<th>DESTINO</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($rutas as $rut)
				<tr>
					<td>{{$rut->id}}</td>
					<td>{{$rut->origin}}</td>
					<td>{{$rut->destination}}</td>					
					<td><a href="{{ route('ruta.edit',$rut) }}">Editar</a></td>
				</tr>
				@endforeach	
			</tbody>
		 </table>
	</div>		
	 <div class="text-center">{!!$rutas->render()!!}</div>		
</div>
@endsection
