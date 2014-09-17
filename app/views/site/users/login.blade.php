@extends ('site.layouts.base_index')

@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

@section ('pageContent')
<div class="main-container container-fluid">
	<a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>

	@include('site.layouts.sidebar_index')

	<div class="main-content">

		<div class="page-content">
            @include('site.layouts.page-header', array('titulo'=>'Accede','subtitulo'=>'Bienvenido!!'))

			<div class="row-fluid">
				<div class="span12">
					<!--PAGE CONTENT BEGINS-->
						{{ Confide::makeLoginForm()->render() }}
							
						
								<a href="{{ URL::route('home') }}">¿No registrado? </a>
								
							
								
							 
							
					<!--PAGE CONTENT ENDS-->
				</div><!--/.span-->
			</div><!--/.row-fluid-->

		</div><!--/.page-content-->
	</div><!--/.main-content-->
</div><!--/.main-container-->


@stop


