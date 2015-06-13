@extends('templates.base')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main view-control">
	<h2>Remisiones</h2>
	<a href="{{ route('remision.create') }}" class="btn btn-warning btn-fab btn-raised mdi-content-add material-button"></a> 
	<div class="table-responsive">		
		{!! Form::model(Request::all(), ['route' => 'remision.index','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
		    @include('administracion.partials.search');
		{!! Form::close() !!}					
		<table class="table table-striped">
			<thead>
				<tr>
					<th>FOLIO</th>
					<th>FECHA</th>
					<th>CLIENTE</th>
					<th>ORIGEN</th>
					<th>DESTINO</th>
					<th>OPERADOR</th>
					<th>TOTAL</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($remisiones as $rem)
				<tr>
					<td>{{$rem->code}}</td>
					<td>{{$rem->date}}</td>
					<td>{{$rem->customer}}</td>
					<td>{{$rem->origin}}</td>
					<td>{{$rem->receiver}}</td>
					<td>{{$rem->driver}}</td>
					<td>{{$rem->total}}</td>
					<td><a href="{{ route('remision.edit',$rem)  }}">Editar</a></td>
				</tr>
				@endforeach	
			</tbody>
		</table>
	</div>
	<div class="text-center">{!!$remisiones->render()!!}</div>
</div>
@endsection
