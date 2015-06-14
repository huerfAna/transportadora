@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
	<div class="row">
		<div class="col-md-9 col-md-offset-2">
			<h2>Empresas</h2>
			<a href="{{ route('empresa.create') }}" class="btn btn-warning btn-fab btn-raised mdi-content-add material-button"></a> 
			<br>
			<div class="list-group">
				@foreach($empresas as $emp)	
			    <div class="list-group-item">
			        <div class="row-action-primary">
			            <a href="{{ route('empresa.edit',$emp) }}"><i class="mdi-social-domain"></i></a>
			        </div>
			        <div class="row-content">
			            <div class="action-secondary"><i class="mdi-material-info"></i></div>
			            <h4 class="list-group-item-heading">{{$emp->name}}</h4>
			            <p class="list-group-item-text">{{$emp->rsocial}}</p>
			        </div>
			    </div>
			    <div class="list-group-separator"></div>
				@endforeach				
			 </div>
		</div>
	</div>
</div>
@endsection
