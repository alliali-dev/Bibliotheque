<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('modele.head')
<title>{{ config('app.name') }}</title>
<!-- HEADER -->

<body>
	<!-- TOP HEADER -->
	@include('modele.header')
	<!-- /HEADER -->
	@yield('content')
	<!-- footer -->
	@include('modele.footer')
	<!-- endfooter -->
</body>
<!-- fichier javascript jquery -->
@include('modele.jquery')

</html>