@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
				<div class="panel-body">
					<nav>
					  <ul>
					  	<li>
					  		<strong><a href="#">Personal</a></strong>
					  		<ul>
					  			<li><a href="{{ url('/empresa') }}">Empresas</a></li>
					  			<li><a href="{{ url('/empleado') }}">Empleados</a></li>
					  			<li><a href="{{ url('/directorio') }}">Directorio</a></li>
					  			<li><a href="{{ url('/') }}">Nomina</a></li>
					  		</ul>
					  	</li>
					  	<li>
					  		<strong><a href="#">Administracion</a></strong>
					  		<ul>
					  			<li><a href="{{ url('/cliente') }}">Clientes</a></li>
					  			<li><a href="{{ url('/proveedor') }}">Proveedores</a></li>
					  			<li><a href="{{ url('/destinatario') }}">Destinatarios</a></li>
					  			<li><a href="/cotizacion">Cotizaciones</a></li>
					  			<li><a href="/facturas">Facturas</a></li>
					  			<li><a href="/contrarecibos">Contrarecibos</a></li>
					  		</ul>
					  	</li>
					  	<li>
					  		<strong><a href="#">Mantenimiento</a></strong>
					  		<ul>
					  			<li><a href="{{ url('/unidad') }}">Unidades</a></li>
					  			<li><a href="{{ url('/remolque') }}">Remolques</a></li>
					  		</ul>
					  	</li>
					  	<li>
					  		<strong><a href="#">Reportes</a></strong>
					  		<ul>
					  			<li><a href="/personal">Graficas</a></li>
					  			<li><a href="/personal">Bitacora</a></li>
					  		</ul>
					  	</li>
					  	<li>
					  		<strong><a href="#">Utilerias</a></strong>
					  		<ul>
					  			<li><a href="/personal">Usuarios</a></li>
					  		</ul>					  		
					  	</li>					  
					  </ul> 
					</nav>					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
