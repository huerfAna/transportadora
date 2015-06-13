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
					{!! Form::model($remision,$form_data) !!}									
						<div class="form-group">
							{!! Form::label('lbfolio','Folio', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::text('folio',null, array('class'=>'form-control')) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbfecha','Fecha', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::text('date',null, array('class'=>'form-control')) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbcliente','Cliente', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::select('customer',$cliente,null, array('class'=>'form-control','id'=>'cli')) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbdestina','Destinatario', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::select('receiver',['' => 'Seleciona...'],null, array('class'=>'form-control')) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbchofer','Chofer', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::select('driver',$chofer,null, array('class'=>'form-control')) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbobs','Observaciones', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::text('observations',null, array('class'=>'form-control')) !!}
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
@section('scripts')
<script>
	   $(document).ready(function() {
        $('#cli').on('change', function() {
            $.ajax({
		      url: 'mostrar',
		      type: "post",
		      data: {'id':$(this).val()},
		      success: function(data){
		        alert(data);
		      }
		    });   
        });
    });
</script>
@endsection