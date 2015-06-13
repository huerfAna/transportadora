@extends('templates.base')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main view-control">
	<h2>Proveedores</h2>
	<a href="{{ route('proveedor.create') }}" class="btn btn-warning btn-fab btn-raised mdi-content-add material-button"></a> 
	<div class="table-responsive">		
		{!! Form::model(Request::all(), ['route' => 'proveedor.index','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
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
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($proveedores as $pro)
				<tr>
					<td>{{$pro->rfc}}</td>
					<td>{{$pro->short_razon}}</td>
					<td>{{$pro->short_calle}}</td>
					<td>{{$pro->phone}}</td>
					<td>{{$pro->email}}</td>
					<td><a href="{{ route('proveedor.edit',$pro)  }}">Editar</a></td>
				</tr>
				@endforeach	
			</tbody>
		</table>
	</div>
	<div class="text-center">{!!$proveedores->render()!!}</div>
</div>
@endsection
