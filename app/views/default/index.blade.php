@extends ('site.layouts.base')

@section ('pageContent')

<div class="main-container container-fluid">
	<a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>

	@include('site.layouts.sidebar')

	<div class="main-content">

		<div class="page-content">
            @include('site.layouts.page-header', array('titulo'=>'Panel de control','subtitulo'=>'Vista de elementos'))

			<div class="row-fluid">
				<div class="span12">
					<!--PAGE CONTENT BEGINS-->

					<div class="alert alert-block alert-success">
						<button type="button" class="close" data-dismiss="alert">
							<i class="icon-remove"></i>
						</button>

						<i class="icon-ok green"></i>

						Bienvenido al panel de administración de
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

			<div class="page-header position-relative">
				<h1> Usuarios <small> <i class="icon-double-angle-right"></i> listado </small></h1>
			</div><!--/.page-header-->

			<div class="row-fluid">
				<div class="span12">
					<!--PAGE CONTENT BEGINS-->
					<!--PAGE CONTENT BEGINS-->
					
					<div class="row-fluid">
						<div class="span12">

							<table id="sample-table-1" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>Id</th>
										<th>Usuario</th>
										<th class="hidden-phone" >Email</th>
										<th class="hidden-phone" >Descripcion</th>
										<th class="hidden-phone" style="width: 136px;"><i class="icon-time bigger-110 hidden-phone"></i> Ultimo login</th>
										<th class="hidden-480">Estatus</th>
										<th class="hidden-480">Acción</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $user)	
									<tr id="fila_">
										<td >{{ $user->id }}</td>
										<td >{{ $user->username}}</td>
										<td >{{ $user->email}}</td>
										<td class="hidden-phone">d/m/Y H:i:s</td>
										<td class="hidden-480"><span class="label label-success" >Habilidado</span>
										</td>

										<td>
											<div class="hidden-phone visible-desktop btn-group" >
												<button class="btn btn-mini btn-success cambiar-estatus" objeto="" tarea="">
													<i class="icon-exchange bigger-120"></i>
												</button>

											</div>
											<div class="hidden-desktop visible-phone">
												<div class="inline position-relative">
													<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
														<i class="icon-cog icon-only bigger-110"></i>
													</button>
													<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info cambiar-estatus" data-rel="tooltip" title="View" objeto="" tarea=""
															> <span class="blue"> <i class="icon-exchange bigger-120"></i> </span> </a>
														</li>
													</ul>
												</div>
											</div>
										</td>
										
										<td>
											<span class="btn btn-small btn-warning" >Editar</span>
											<span class="btn btn-small btn-danger">Eliminar</span>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>

							<div class="row-fluid">
								<div class="span6">
									<div class="dataTables_info" id="sample-table-2_info">
										 
										 {{count($users)}} Resultados
									</div>
								</div>
								<div class="span6">
									<div class="dataTables_paginate paging_bootstrap pagination" style="margin: 0px;font-size: 18px;">

										{{ $users->links() }}
								
									</div>
								</div>
							</div>

						</div><!--/span-->
					</div><!--/row-->
					<div class="hr hr-18 dotted hr-double"></div>
		

					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">
							<i class="icon-remove"></i>
						</button>

						<strong> <i class="icon-remove"></i> Lo sentimos... </strong>

						No se han encontrado resultados en esta busqueda.
						<br>
					</div>
					

					<!--PAGE CONTENT ENDS-->
				</div><!--/.span-->
			</div><!--/.row-fluid-->

		</div><!--/.page-content-->
	</div><!--/.main-content-->
</div><!--/.main-container-->


@stop


