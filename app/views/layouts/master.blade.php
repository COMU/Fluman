<!DOCTYPE html>
<html>
	<head>
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

		@section('head')
		@show
			
		<title>@yield('title', 'Untitled Page')</title>
	</head>
	<body>
		<div class="ink-grid">
			<div class="column-group gutters">
				<div class="large-33 medium-33 small-100">

					<header>
						<h1>
							Fluman<small>for humans</small>
						</h1>
						<nav class="ink-navigation">
							<ul class="menu vertical black">
									<li><a href="dashboard">Homepage</a></li>
									<li><a href="config">Configuration</a></li>
									<li><a href="logout">Logout</a></li>
									@section('sidebar')
									@show
							
							</ul>
						</nav> 
					</header>
				</div>
				<div class="large-66 medium-66 small-100 content">
					<h1>@yield('title', 'Untitled Page')</h1>

					@yield('content')
				</div>
			</div>
		</div>

			<script type="text/javascript" src="js/ink.min.js"></script>
			<script type="text/javascript" src="js/ink-ui.min.js"></script>
			<script type="text/javascript" src="js/autoload.js"></script>
			<script type="text/javascript" src="js/html5shiv.js"></script>
			@section('footer_scripts')
			@show

	</body>
</html>
