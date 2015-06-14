@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@include('errors.error')
					{!! Form::model($contrarecibo,$form_data) !!}									
						<div class="form-group">
							{!! Form::label('lbfolio','Factura', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">	
								{!! Form::text('code',null, array('class'=>'form-control','id'=>'folio')) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbfecha','Fecha', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::date('date',null, array('class'=>'form-control')) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbtotal','Total', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::text('total',null, array('class'=>'form-control')) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbtotal','Faltante', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::text('balance',null, array('class'=>'form-control')) !!}
							</div>
						</div>						
						<div class="form-group">
							{!! Form::label('lbcliente','Cliente/Proveedor', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::select('provider',$cliente,null, array('class'=>'form-control','id'=>'cli')) !!}
							</div>
						</div>						
						<div class="form-group">
							{!! Form::label('lbchofer','Tipo', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::select('tpayment',[''=>'Seleciona'],null, array('class'=>'form-control')) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbobs','Observaciones', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::textarea('observation',null, array('class'=>'form-control','rows'=>'4')) !!}
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