@extends('templates.base')

@section('content')
<div class="container-fluid views-control">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<br>
	<div class="bs-example" data-example-id="default-media">
		@for ($i = 0; $i < 5; $i++)
		<div class="media">
	  		<div class="media-left">
	    		<a href="#">
	      			<img class="media-object" src="http://2.bp.blogspot.com/-6QyJDHjB5XE/Uscgo2DVBdI/AAAAAAAACS0/DFSFGLBK_fY/s1600/facebook-default-no-profile-pic.jpg" width="64" height="64" alt="..." style="border-radius:50%">
	    		</a>
	  		</div>
	  		<div class="media-body">
	    		<h4 class="media-heading">Cliente: Name</h4>
	    		<p>Empresa:Name.<br>
	    		<span class="target-details" data-item="{{$i}}"><i class="mdi-hardware-keyboard-arrow-down"></i></span>
	    		</p>
	  		</div>
		</div>
		<div class="details-media" id="detail-{{$i}}">
			<div class="col-lg-12">
				<div class="col-lg-4">
	                <div class="bs-component">
	                    <div class="panel panel-default">
	                        <div class="panel-body">
	                            <i class="mdi-social-domain"></i>Tecnologico No. 100<br>
	                            <i class="mdi-action-perm-phone-msg"></i>444 195 0180
	                        </div>
	                    </div>
	                </div>
	             </div>
			</div>
		</div>
		@endfor
	</div>
</div>
</div>
@stop 

@section('scripts')
<script>
$(".target-details").click(function(e) {
	e.preventDefault();
	item = $(this).data("item");
	$( "#detail-"+item ).toggle( "slow" );
});
</script>
@stop