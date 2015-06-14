	<div class="form-group">
		{!! Form::label('lbident','RFC', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('rfc',null, ['class'=>'form-control','placeholder'=>'[Ingresa R.F.C.]']) !!} 
		</div>
	</div>
		<div class="form-group">
		{!! Form::label('lbrazon','Razón Social', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('rsocial',null, ['class'=>'form-control','placeholder'=>'[Ingresa Razón Social].']) !!} 
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lbcalle','Calle', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('address',null, ['class'=>'form-control','placeholder'=>'[Ingresa R.F.C.]']) !!} 
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lbnumero','Numero Ext', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('number',null, ['class'=>'form-control','placeholder'=>'[Ingresa Número]']) !!} 
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lbcolonia','Colonia', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('colony',null, ['class'=>'form-control','placeholder'=>'[Ingresa Colonia]']) !!} 
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lbmpo','Municipio', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('city',null, ['class'=>'form-control','placeholder'=>'Ingresa Municipio']) !!} 
		</div>
	</div>
		<div class="form-group">
		{!! Form::label('lbcpostal','Código Postal', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('pcode',null, ['class'=>'form-control','placeholder'=>'[Ingresa C.P.]']) !!} 
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lbtelefono','Teléfono', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('phone',null, ['class'=>'form-control','placeholder'=>'[Ingresa telefono]']) !!} 
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('lbcuenta','Cuenta Bancaria', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('account',null, ['class'=>'form-control','placeholder'=>'[Ingresa Cuenta]']) !!} 
	</div>
	</div>
	<div class="form-group">
		{!! Form::label('lbcorreo','Correo Electronico', ['class'=>'col-md-3 control-label']) !!} 
		<div class="col-md-6">
		{!! Form::text('email',null, ['class'=>'form-control','placeholder'=>'[Ingresa Correo Electronico]']) !!} 
	</div>
	<div class="form-group">							
		<div class="col-md-6">
		{!! Form::hidden('company',Session::get('emp')) !!} 
		</div>
	</div>