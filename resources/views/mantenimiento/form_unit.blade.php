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
					{!! Form::model($unidad,$form_data) !!}
						<div class="form-group">
							{!! Form::label('lbno','No. Economico', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('unit_number',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbplacas','Placas', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('plates',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbnombre','Nombre', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('name',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbdescrip','Descripción', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('description',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						
						<div class="form-group">
							{!! Form::label('lbmarca','Marca', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('trademark',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbmodelo','Modelo', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('model',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbtipo','Tipo', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('type',null, array('class'=>'form-control')) !!} 
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbpoliza','Poliza', array('class'=>'col-md-4 control-label')) !!} 
							<div class="col-md-6">
								{!! Form::text('policy',null, array('class'=>'form-control')) !!} 
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
