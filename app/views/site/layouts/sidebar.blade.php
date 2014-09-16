<div class="sidebar" id="sidebar">
	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-small btn-success" >
				<i class="icon-home"></i>
			</button>

			<button class="btn btn-small btn-info">
				<i class="icon-pencil"></i>
			</button>

			<button class="btn btn-small btn-warning">
				<i class="icon-group"></i>
			</button>

			<button class="btn btn-small btn-danger">
				<i class="icon-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!--#sidebar-shortcuts-->

	<ul class="nav nav-list">
		<li >
			<a href="{{ URL::route('home') }}"> <i class="icon-dashboard"></i> <span class="menu-text"> Panel de Control </span> </a>
		</li>
		{{--<li class="active">
			<a href="#" > <i class="icon-key"></i> <span class="menu-text"> Iniciar sesión </span> </a>
		</li>
		<li class="active">
			<a href="#"> <i class="icon-group"></i> <span class="menu-text"> Registro </span> </a>
		</li>
	
--}}
		
       <li class="open">
			<a href="#" class="dropdown-toggle"> <i class="icon-globe"></i> <span class="menu-text"> Peliculas </span> <b class="arrow icon-angle-down"></b> </a>

			<ul class="submenu" style="display:block">
				<li >
					<a href="{{ URL::route('movie') }}"> <i class="icon-double-angle-right"></i> Listado </a>
				</li>
				<li >
					 <a href="{{ URL::route('movie.create') }}"><i class="icon-double-angle-right"></i> Nuevo </a>
				</li>
			</ul>
		</li>
		
		 <li class="open">
			<a href="#" class="dropdown-toggle"> <i class="icon-globe"></i> <span class="menu-text"> Series </span> <b class="arrow icon-angle-down"></b> </a>

			
		</li>

		{{--<li class="active">
			<a href="#"> <i class="icon-eye-open"></i> <span class="menu-text"> Mi Perfil </span> </a>
		</li>
		<li class="active">
			<a href="#"> <i class="icon-edit"></i> <span class="menu-text"> Editar Perfil </span> </a>
		</li>
		<li >
			<a href="#"> <i class="icon-off"></i> <span class="menu-text"> Cerrar sesión </span> </a>
		</li>--}}
	</ul><!--/.nav-list-->

	<div class="sidebar-collapse" id="sidebar-collapse">
		<i class="icon-double-angle-left"></i>
	</div>
</div>
