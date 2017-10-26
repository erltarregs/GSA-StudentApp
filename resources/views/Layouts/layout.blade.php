<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GSA Student Development System - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/all.css') }}">
</head>
<body>
<div class="site">
	<div class="nav-area">
		@include('layouts.navigation')
	</div>
	<div class="content-area">
		@include('layouts.page-content')
	</div>
	<footer class="footer-area">
		@include('layouts.page-footer')
	</footer>
</div>
</body>
</html>