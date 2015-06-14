@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@include('errors.error')
					{!! Form::model($unidad,$form_data) !!}
						<div class="form-group">
							{!! Form::label('lbno','No. Economico', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('unit_number',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						@include('mantenimiento.partials.fields');
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
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
