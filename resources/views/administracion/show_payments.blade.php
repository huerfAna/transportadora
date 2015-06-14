@extends('templates.base')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main view-control">
	<h2>Contrarecibos</h2>
	<a href="{{ route('contrarecibo.create') }}" class="btn btn-warning btn-fab btn-raised mdi-content-add material-button"></a> 
	<div class="table-responsive">		
		{!! Form::model(Request::all(), ['route' => 'contrarecibo.index','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
		    @include('administracion.partials.search')
		{!! Form::close() !!}					
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>					
					<th>CLIENTE/PROVEEDOR</th>
					<th>TIPO</th>
					<th>FACTURA</th>
					<th>FECHA</th>
					<th>TOTAL</th>
					<th>ADEUDO</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($contrarecibos as $cr)
				<tr>
					<td>{{$cr->id}}</td>
					<td>{{$cr->provider}}</td>
					<td>{{$cr->tpayment}}</td>
					<td>{{$cr->code}}</td>
					<td>{{$cr->date}}</td>
					<td>{{$cr->total}}</td>
					<td>{{$cr->balance}}</td>
					<td><a href="{{ route('contrarecibo.edit',$cr)  }}">Editar</a></td>
				</tr>
				@endforeach	
			</tbody>
		</table>
	</div>
	<div class="text-center">{!!$contrarecibos->render()!!}</div>
</div>
@endsection
