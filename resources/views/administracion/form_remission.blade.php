@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@include('errors.error')
					{!! Form::model($remision,$form_data) !!}									
						<div class="form-group">
							{!! Form::label('lbfolio','Folio', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">	
								@if($folio != '')
									{!! Form::text('folio',$folio, array('class'=>'form-control','id'=>'folio')) !!}
								@else
									{!! Form::text('folio',null, array('class'=>'form-control','id'=>'folio')) !!}
								@endif
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('lbfecha','Fecha', array('class'=>'col-md-2 control-label')) !!} 
							<div class="col-md-4">
								{!! Form::date('date',null, array('class'=>'form-control')) !!}
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
								{!! Form::select('receiver',['' => 'Seleciona...'],null, array('class'=>'form-control','id'=>'destina')) !!}
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
					<div class="form-group">
							{!! Form::open(['action' => 'DetRemissionController@store']) !!}	
							<div class="col-md-4 col-md-offset-1">
							{!! Form::text('remission',null, array('class'=>'form-control','id'=>'rem')) !!}
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>cantidad</th>
										<th>unidad</th>
										<th>descripción</th>
										<th>precio</th>
										<th>importe</th>
										<th>{!! Form::submit('+', ['class' => 'btn']) !!}</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th></th>
										<th>{!! Form::text('quantity',null, array('class'=>'form-control','id'=>'cant')) !!}</th>
										<th>{!! Form::text('unit',null, array('class'=>'form-control')) !!}</th>
										<th>{!! Form::text('description',null, array('class'=>'form-control')) !!}</th>
										<th>{!! Form::text('price',null, array('class'=>'form-control','id'=>'precio')) !!}</th>
										<th>{!! Form::text('amount',null, array('class'=>'form-control','id'=>'total')) !!}</th>
									</tr>
									@foreach($detalle as $det)
									<tr>
										<th>{{ $det->id }}</th>
										<th>{{ $det->quantity }}</th>
										<th>{{ $det->unit }}</th>
										<th>{{ $det->description }}</th>
										<th>{{ $det->price }}</th>
										<th>{{ $det->amount }}</th>
									</tr>
									@endforeach
								</tbody>
						 	</table>
						 	</div>
							{!! Form::close() !!}					
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	   $(document).ready(function() {
	   	$('#rem').val($('#folio').val());
        $('#cli').on('change', function() {
            $.ajax({
		      url:'/transportadora/public/remision/select',
		      type: "post",
		      dataType: "json",
		      data: {'id':$(this).val(), '_token': $('input[name=_token]').val()},
		      success: function(data){
		      	console.log(data);
		        $.each(data, function(i, value) {
		            $('#destina').append($('<option>').text(value).attr('value', i));
		        });
		      }
		    });    
        });
        $('#precio').on('change',function(){
        	var cantidad = $('#cant').val();
        	var precio = $('#precio').val();
        	var total = cantidad * precio;
        	alert(precio);
	        	$('#total').val(total);

        });
    });
</script>
@endsection