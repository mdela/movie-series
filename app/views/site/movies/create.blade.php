@extends ('site.layouts.base')

@section ('pageContent')

<div class="main-container container-fluid">
	<a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>

	@include('site.layouts.sidebar')

	<div class="main-content">

		<div class="page-content">
			@include('site.layouts.page-header', array('titulo'=>'Peliculas','subtitulo'=>'Vista de elementos'))

			{{ Form::open(array('action' => 'MovieController@post_save','class' => 'form-horizontal')) }}
				<div id="fuente" class="form-horizontal">
					<div class="control-group">
						<label class="control-label" for="form-field-1"><label for="fuente_nombre" class="required">Nombre</label></label>
						<div class="controls">
							
							{{ Form::text('nombre','',array('id'=>'','class'=>'')) }}
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="form-field-1"><label for="fuente_url" class="required">Duracion</label></label>
						<div class="controls">

							{{ Form::text('duracion','',array('id'=>'','class'=>'')) }}
						</div>
					</div>
				
					<div>
						
						<div class="hr"></div>
					</div>
				</div>
			{{ Form::close() }}

		</div><!--/.page-content-->
	</div><!--/.main-content-->
</div><!--/.main-container-->

@stop

