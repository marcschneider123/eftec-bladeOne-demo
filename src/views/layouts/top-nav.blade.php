@if(isset($showTopNav) && $showTopNav)
	<div class="fixed-top bg-light ">
		<div class="container bg-light navbar-contact d-none d-md-block">
			<div class="row">
				<div class="col-12 text-right">
					<a href="tel:{{$config['company']['phone']}}" title="{{$config['company']['name']}} per Telefon kontaktieren">
						<div class="d-sm-inline pr-3"><i class="fas fa-fw fa-phone mr-1"></i>{{$config['company']['phone']}}</div>
					</a>
					<a href="mailto:{{$config['company']['email']}}" title="{{$config['company']['name']}} per E-Mail kontaktieren">
						<div class="d-sm-inline"><i class="fas fa-fw fa-envelope mr-1"></i>{{$config['company']['email']}}</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-md navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img src="img/logo/logo.png" class="logo" alt="{{$config['company']['name']}} Logo">
			</a>
{{--			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"--}}
{{--					aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--				Menü--}}
{{--				<i class="fas fa-bars"></i>--}}
{{--			</button>--}}
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="/#service">Service</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="/#benefits">Vorteile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="/#references">Referenzen</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger btn btn-sm btn-primary" href="/kontakt">Anfrage <i class="fas fa-angle-right"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
@endif