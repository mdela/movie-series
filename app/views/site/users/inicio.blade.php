@extends ('site.layouts.base_index')



@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop
@section ('pageContent')
<div class="main-container container-fluid">
	<a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>

	@include('site.layouts.sidebar_index')

	<div class="main-content">

		<div class="page-content">
            @include('site.layouts.page-header', array('titulo'=>'Registrate','subtitulo'=>'Vista de elementos'))
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop
			<div class="row-fluid">
				<div class="span12">
					<!--PAGE CONTENT BEGINS-->
					{{ Confide::makeSignupForm()->render() }}	

					<!--PAGE CONTENT ENDS-->
				</div><!--/.span-->
			</div><!--/.row-fluid-->

		</div><!--/.page-content-->
	</div><!--/.main-content-->
</div><!--/.main-container-->


@stop


