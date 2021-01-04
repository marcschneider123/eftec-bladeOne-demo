@extends('layouts.base')
@section ('title', '404: Seite nicht gefunden!')

@section('content')
	@include('layouts.top-nav-contact')
	<section class="container">
		<div class="row d-flex justify-content-center text-center">
			<div class="col-sm-8 col-lg-6">
				<div class="error-page">
					<h1 class="text-warning">404</h1>
					<div class="error-content">
						<h3>
							<i class="fal fa-exclamation-triangle  text-warning"></i>&nbsp;Seite nicht gefunden!
						</h3>
						<p>
							Die von Ihnen angeforderte Seite konnte nicht gefunden werden. <br>
							Zurück zur <a href="/">Homepage</a>
						</p>
					</div><!-- /.error-content -->
				</div><!-- /.error-page -->
			</div>
		</div>
	</section>
@stop