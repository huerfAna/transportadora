@extends('templates.base')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main view-control">
	<h2>Clientes</h2>
	<a href="{{ route('cliente.create') }}" class="btn btn-warning btn-fab btn-raised mdi-content-add material-button"></a>
	
	<div class="table-responsive">	
		{!! Form::model(Request::all(), ['route' => 'cliente.index','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
		   @include('administracion.partials.search')
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
				<tr>
			</thead>
			<tbody>
				@foreach($clientes as $cli)
				<tr>
					<td>{{$cli->rfc}}</td>
					<td>{{$cli->short_razon}}</td>
					<td>{{$cli->short_calle}}</td>
					<td>{{$cli->phone}}</td>
					<td>{{$cli->email}}</td>
					<td><a href="{{ route('cliente.edit',$cli)  }}">Editar</a></td>
				</tr>
				@endforeach	
			</tbody>
		</table>
	</div>
	<div class="text-center">{!!$clientes->render()!!}</div>
</div>
@endsection
