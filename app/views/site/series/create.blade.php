@extends ('helpers.base')

@section ('pageContent')

<div class="main-container container-fluid">
	<a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>

	@include('helpers.sidebar')

	<div class="main-content">

		<div class="page-content">
			@include('helpers.page-header', array('titulo'=>'Peliculas','subtitulo'=>'Vista de elementos'))

			{{ Form::open(array('action' => 'PeliculaController@post_save','class' => 'form-horizontal')) }}
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
						<div class="form-actions">
							<button type="submit" id="fuente_save" name="fuente[save]" class="btn btn-info">
								Guardar
							</button>
						</div>
						<div class="hr"></div>
					</div>
				</div>
			{{ Form::close() }}

		</div><!--/.page-content-->
	</div><!--/.main-content-->
</div><!--/.main-container-->

@stop

