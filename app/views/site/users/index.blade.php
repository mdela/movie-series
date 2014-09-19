@extends ('site.layouts.base')

@section ('pageContent')

<div class="main-container container-fluid">
	<a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>

	@include('site.layouts.sidebar')

	<div class="main-content">

		<div class="page-content">
            @include('site.layouts.page-header', array('titulo'=>'Panel de control','subtitulo'=>'Usuarios'))

			<div class="row-fluid">
				<div class="span12">
					<!--PAGE CONTENT BEGINS-->

					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="icon-remove"></i>
						</button>

						<i class="icon-ok green"></i>

						Bienvenido a
						<strong class="green"> @include ('site.layouts.nombre') <small>(v1)</small> </strong>

					</div>

					<div class="space-6"></div>

					<div class="row-fluid">
						<div class="span12 infobox-container">
							<div class="infobox infobox-green  ">
								<div class="infobox-icon">
									<i class="icon-folder-close"></i>
								</div>

								<div class="infobox-data">
									<span class="infobox-data-number"></span>
									<div class="infobox-content">
										Paginas
									</div>
								</div>
							</div>
							<div class="infobox infobox-red  ">
								<div class="infobox-icon">
									<i class="icon-camera"></i>
								</div>

								<div class="infobox-data">
									<span class="infobox-data-number"></span>
									<div class="infobox-content">
										Backgrounds
									</div>
								</div>
							</div>

							<div class="infobox infobox-pink  ">
								<div class="infobox-icon">
									<i class="icon-book"></i>
								</div>

								<div class="infobox-data">
									<span class="infobox-data-number"></span>
									<div class="infobox-content">
										Busquedas de terminos
									</div>
								</div>
							</div>

							<div class="infobox infobox-blue  ">
								<div class="infobox-icon">
									<i class="icon-download"></i>
								</div>

								<div class="infobox-data">
									<span class="infobox-data-number">0</span>
									<div class="infobox-content">
										Archivos
									</div>
								</div>
							</div>

							<div class="infobox infobox-orange2  ">
								<div class="infobox-icon">
									<i class="icon-group"></i>
								</div>

								<div class="infobox-data">
									<span class="infobox-data-number"></span>
									<div class="infobox-content">
										Usuarios
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--PAGE CONTENT ENDS-->
				</div><!--/.span-->
			</div><!--/.row-fluid-->


		</div><!--/.page-content-->
	</div><!--/.main-content-->
</div><!--/.main-container-->


@stop


