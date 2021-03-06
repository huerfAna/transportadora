@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@include('errors.error')
					{!! Form::model($destinatario,$form_data) !!}												
						@include('administracion.partials.fields_admin');
						<div class="form-group">
							{!! Form::label('lbcliente','Cliente', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::select('customer',$cliente,null, array('class'=>'form-control')) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-3 col-md-offset-8">
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
