@extends('templates.base')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main view-control">
	<h2>Destinatarios</h2>
	<a href="{{ route('destinatario.create') }}" class="btn btn-warning btn-fab btn-raised mdi-content-add material-button"></a>
	<div class="table-responsive">		
		{!! Form::model(Request::all(),['route' => 'destinatario.index','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
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
				</tr>
			</thead>
			<tbody>
				@foreach($destinatarios as $des)
				<tr>
					<td>{{$des->rfc}}</td>
					<td>{{$des->short_razon}}</td>
					<td>{{$des->short_calle}}</td>
					<td>{{$des->phone}}</td>
					<td>{{$des->email}}</td>
					<td><a href="{{ route('destinatario.edit',$des) }}">Editar</a></td>
				</tr>
				@endforeach	
			</tbody>
		 </table>
		</div>
		<div class="text-center">{!!$destinatarios->render()!!}</div>		
</div>
@endsection
