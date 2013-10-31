<!DOCTYPE html>
<html>
	<head>
		@section('header')

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="HandheldFriendly" content="True">
			<meta name="MobileOptimized" content="320">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
			<link rel="stylesheet" type="text/css" href="css/ink.css">
			<link rel="stylesheet" type="text/css" href="css/custom.css">
			<!--[if IE 7 ]>
				<link rel="stylesheet" href="css/ink-ie7.css" type="text/css" media="screen" title="no title" charset="utf-8">
			<![endif]-->

		@show

		<title>@yield('title', 'Untitled Page')</title>
	</head>
	<body>

			@yield('content')

			@section('footer_scripts')

			<script type="text/javascript" src="js/ink.min.js"></script>
			<script type="text/javascript" src="js/ink-ui.min.js"></script>
			<script type="text/javascript" src="js/autoload.js"></script>
			<script type="text/javascript" src="js/html5shiv.js"></script>

			@show

	</body>
</html>
