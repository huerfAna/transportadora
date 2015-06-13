@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-9 col-md-offset-2">
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
					<br>
					{!! Form::model($empresa,$form_data) !!}
						<div class="form-group">
							{!! Form::label('lbnombre','Nombre', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-3">
								{!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'[Ingresa Nombre de Empresa]']) !!} 
							</div>
							{!! Form::label('lbrfc','R.F.C', ['class'=>'col-md-1 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('rfc',null, ['class'=>'form-control','placeholder'=>'[Ingresa R.F.C]']) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbrazon','Razón Social', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-6">
								{!! Form::text('rsocial',null, ['class'=>'form-control', 'placeholder'=>'[Ingresa Razón Social]']) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbcalle','Calle', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-3">
								{!! Form::text('address',null, ['class'=>'form-control', 'placeholder'=>'[Ingresa Calle]']) !!} 
							</div>
							{!! Form::label('lbnumero','Número', ['class'=>'col-md-1 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('number',null, ['class'=>'form-control','placeholder'=>'[Ingresa Número]']) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbcolonia','Colonia', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-3">
								{!! Form::text('colony',null, ['class'=>'form-control','placeholder'=>'[Ingresa Colonia]']) !!} 
							</div>
							{!! Form::label('lblocalidad','Localidad', ['class'=>'col-md-1 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('location',null, ['class'=>'form-control','placeholder'=>'[Ingresa Localidad]']) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbmunicipio','Municipio', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-3">
								{!! Form::text('city',null, ['class'=>'form-control','placeholder'=>'[Ingresa Municipio]']) !!} 
							</div>
							{!! Form::label('lbtelefono','Teléfono', ['class'=>'col-md-1 control-label']) !!} 
							<div class="col-md-2">
								{!! Form::text('phone',null, ['class'=>'form-control','placeholder'=>'[Ingresa Teléfono]']) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lblogo','Logo', ['class'=>'col-md-2 control-label']) !!} 
							<div class="col-md-6">
								{!! Form::file('image',null, ['class'=>'form-control']) !!} 
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-2 col-md-offset-6">
								<br>
								{!! Form::submit('Guardar', array('class' => 'btn btn-primary')) !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
