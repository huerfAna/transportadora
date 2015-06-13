@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
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
					{!! Form::model($remolque,$form_data) !!}
						<div class="form-group">
							{!! Form::label('lbplacas','Placas', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-3">
								{!! Form::text('plates',null, array('class'=>'form-control')) !!} 
							</div>
							{!! Form::label('lbnombre','Nombre', array('class'=>'col-md-1 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::text('name',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbdescrip','Descripción', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-7">
								{!! Form::text('description',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbserie','Serie', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('series',null, array('class'=>'form-control')) !!} 
							</div>
							{!! Form::label('lbmarca','Marca', array('class'=>'col-md-1 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('trademark',null, array('class'=>'form-control')) !!} 
							</div>
							{!! Form::label('lbmodelo','Modelo', array('class'=>'col-md-1 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('model',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbtipo','Tipo', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('type',null, array('class'=>'form-control')) !!} 
							</div>
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
							{!! Form::label('lbeje1','Eje Simple', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('asingle',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbeje2','Eje Doble', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('adouble',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbpoliza','Poliza', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-2">
								{!! Form::text('policy',null, array('class'=>'form-control')) !!} 
							</div>
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
