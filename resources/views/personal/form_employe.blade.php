@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					{!! Form::model($empleado,$form_data) !!}				
						<div class="form-group">							
							<div class="col-md-5">
								{!! Form::text('company',1) !!} 
							</div>							
						</div>
						<div class="form-group">
							{!! Form::label('lbnombre','Nombre', ['class'=>'col-md-2 control-label']) !!}
							<div class="col-md-5">
								{!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'[Ingrese Nombre]']) !!} 
							</div>
							{!! Form::label('lbident','R.F.C', ['class'=>'col-md-1 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('rfc',null, ['class'=>'form-control','placeholder'=>'[Ingrese R.F.C]']) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbcalle','Calle', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-5">
								{!! Form::text('address',null, ['class'=>'form-control','placeholder'=>'[Ingrese Calle]']) !!} 
							</div>
							{!! Form::label('lbnumero','Numero', ['class'=>'col-md-1 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('number',null, ['class'=>'form-control','placeholder'=>'[Ingrese Número]']) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbcolonia','Colonia', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('colony',null, ['class'=>'form-control','placeholder'=>'[Ingrese Colonia]']) !!} 
							</div>
						
							{!! Form::label('lbmpo','Municipio', ['class'=>'col-md-1 control-label']) !!}
							<div class="col-md-2">
								{!! Form::text('city',null, ['class'=>'form-control','placeholder'=>'[Ingrese Municipio]']) !!} 
							</div>
							{!! Form::label('lbcpostal','C.P.', ['class'=>'col-md-1 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('pcode',null, ['class'=>'form-control','placeholder'=>'[Ingrese C.P.]']) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbtelefono','Teléfono', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('phone',null, ['class'=>'form-control','placeholder'=>'[Ingrese Teléfono]']) !!} 
							</div>
							{!! Form::label('lbtelefono','Teléfono Empresa', ['class'=>'col-md-1 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('cphone',null, ['class'=>'form-control','placeholder'=>'[Ingrese Teléfono]']) !!} 
							</div>
							{!! Form::label('lbnextel','Nextel', ['class'=>'col-md-1 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('nextel',null, ['class'=>'form-control','placeholder'=>'[Ingrese Nextel]']) !!} 
							</div>														
						</div>
						<div class="form-group">
							{!! Form::label('lbcorreo','Correo Electronico', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-3">
								{!! Form::text('email',null, ['class'=>'form-control','placeholder'=>'[Ingrese Correo Electronico]']) !!} 
							</div>														
						</div>
						<hr>
						<div class="form-group">
							{!! Form::label('lbtipo','Tipo', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-1">
								{!! Form::select('type', config('options.types')) !!} 
							</div>												
						</div>
						<div class="form-group">
							{!! Form::label('lbfecha','Fecha Alta', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::date('date_entry',null, ['class'=>'form-control','placeholder'=>'[Ingrese Fecha Alta]']) !!}
							</div>										
						</div>
						<div class="form-group">
							{!! Form::label('lbimss','No IMSS', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('imss',null, ['class'=>'form-control','placeholder'=>'[Ingrese No IMSS]']) !!} 
							</div>								
						</div>
						<div class="form-group">
							{!! Form::label('lbfechaimss','Fecha Alta IMSS', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::date('date_imss',null, ['class'=>'form-control','placeholder'=>'[Ingrese Fecha de Alta]']) !!} 
							</div>								
						</div>
						<div class="form-group">
							{!! Form::label('lbsueldo','Sueldo Base', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('salary',null, ['class'=>'form-control','placeholder'=>'[Ingrese Sueldo]']) !!} 
							</div>	
						</div>	
						<div class="form-group">
							{!! Form::label('lblicencia','Licencia', ['class'=>'col-md-2 control-label']) !!}
							<div class="col-md-2">
							{!! Form::text('license', null, ['class'=>'form-control','placeholder'=>'[Licencia]']) !!} 
							</div>		
						</div>
						<div class="form-group">
							{!! Form::label('lbvig','Vigencia', ['class'=>'col-md-2 control-label']) !!}
							<div class="col-md-2">
							{!! Form::date('date_validate',null, ['class'=>'form-control','placeholder'=>'[Ingrese Vigencia]']) !!} 
							</div>	
						</div>
						<div class="form-group">
							{!! Form::label('lbunidad','Unidad', ['class'=>'col-md-2 control-label']) !!}
							<div class="col-md-2">
							{!! Form::select('unit',$unidad) !!}
							</div>	
						</div>
						<div class="form-group">
							{!! Form::label('lbfoto','Fotografia', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-3">
								{!! Form::file('photo',null, ['class'=>'form-control']) !!} 
							</div>
						</div>						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-10">
								<br>
								{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
							</div>
						</div>						
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
