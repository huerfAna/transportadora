@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@include('errors.error')
					{!! Form::model($ruta,$form_data) !!}
						<div class="form-group">
							{!! Form::label('lbaorigen','Origen', array('class'=>'col-md-1 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('origin',null, array('class'=>'form-control')) !!} 
							</div>
							{!! Form::label('lbdest','Destino', array('class'=>'col-md-1 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('destination',null, array('class'=>'form-control')) !!} 
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