@extends ('helpers.base')

@section ('pageContent')

<div class="main-container container-fluid">
	<a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>

	@include('helpers.sidebar')

	<div class="main-content">

		<div class="page-content">
            @include('helpers.page-header', array('titulo'=>'Peliculas','subtitulo'=>'Vista de elementos'))

			<div class="row-fluid">
				<div class="span12">
					<!--PAGE CONTENT BEGINS-->
					<!--PAGE CONTENT BEGINS-->
					@if (count($peliculas) > 0)
					<div class="row-fluid">
						<div class="span12">

							<table id="sample-table-1" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nombre</th>
										<th class="hidden-phone" >Duracion</th>
										<th class="hidden-phone" >Creado</th>
										<th class="hidden-phone" >Actualizado</th>
									</tr>
								</thead>
								<tbody>
								@foreach($peliculas as $element)					
									<tr id="fila_$element->id">
										<td >{{ $element->id }}</td>
										<td >{{ $element->nombre }}</td>
										<td class="hidden-phone">{{ $element->duracion }}</td>
										<td class="hidden-phone">{{$element->created_at->format('d/m/Y H:i:s')}}</td>
										<td class="hidden-phone">{{$element->updated_at->format('d/m/Y H:i:s')}}</td>
									</tr>
								@endforeach
								</tbody>
							</table>
							

							<div class="row-fluid">
								<div class="span6">
									<div class="dataTables_info" id="sample-table-2_info">
										 {{count($peliculas)}} Resultados 
										
									</div>
								</div>
								<div class="span6">
									<div class="dataTables_paginate paging_bootstrap pagination" style="margin: 0px;font-size: 18px;">
										{{ $peliculas->links() }}
										
									</div>
								</div>
							</div>

						</div><!--/span-->
					</div><!--/row-->
					<div class="hr hr-18 dotted hr-double"></div>
		            
                    @else
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">
							<i class="icon-remove"></i>
						</button>

						<strong> <i class="icon-remove"></i> Lo sentimos... </strong>

						No se han encontrado resultados en esta busqueda.
						<br>
					</div>
					@endif
					
					<!--PAGE CONTENT ENDS-->
				</div><!--/.span-->
			</div><!--/.row-fluid-->

		</div><!--/.page-content-->
	</div><!--/.main-content-->
</div><!--/.main-container-->


@stop


