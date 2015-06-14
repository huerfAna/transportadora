@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@include('errors.error')
					{!! Form::model($remolque,$form_data) !!}
						@include('mantenimiento.partials.fields');
						<div class="form-group">
							{!! Form::label('lbanio','Año', array('class'=>'col-md-1 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('age',null, array('class'=>'form-control')) !!} 
							</div>
							{!! Form::label('lbpeso','Peso', array('class'=>'col-md-1 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('weight',null, array('class'=>'form-control')) !!} 
							</div>
						</div>						
						<div class="form-group">
							{!! Form::label('lbcapac','Capacidad', array('class'=>'col-md-1 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('capacity',null, array('class'=>'form-control')) !!} 
							</div>
							{!! Form::label('lbrazon','Medidas', array('class'=>'col-md-1 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('measure',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-5 col-md-offset-9">
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
