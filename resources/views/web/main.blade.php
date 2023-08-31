<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		@yield('title')
		@stack('header')
		<!-- Styles -->
		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	</head>
	<body class="body">
        @include('web.common.header')
        @yield('content')			
		@include('web.common.footer')
	</body>	
	<!-- Scripts -->
		<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('js/popper.js') }}"></script>
		<script src="{{ asset('js/bootstrap4.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		<script src="{{ asset('js/jquery.mask.js') }}"></script>
{{--		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDpzw9SH97G5L9Af-dR5TeixK8OEPqocY&callback=initMap" type="text/javascript"></script>--}}
		@stack('footer')
</html>