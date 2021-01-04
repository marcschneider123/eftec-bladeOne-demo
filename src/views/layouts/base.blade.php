<!DOCTYPE html>
<html lang="de">
<head>
    @include('layouts.header')
</head>
<body id="page-top" class="{{$class or ''}}{{(isset($showTopNav) && $showTopNav) ? 'topNav':''}}">
{{--insert GoogleTagManager if GTM-ID is set--}}
@if(strlen(trim($config['meta']['gtm'])))
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{$config['meta']['gtm']}}"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
@endif
	<noscript>Bitte aktivieren Sie Javascript!</noscript>
	<div id="app">
		@include('layouts.top-nav')
		@yield('content')
	</div>
	@include('layouts.footer')
	@include('layouts.scripts')
</body>
</html>
