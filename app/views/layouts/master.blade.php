<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<meta name="HandheldFriendly" content="True">
			<meta name="MobileOptimized" content="320">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
			{{ HTML::style('css/ink.css') }}
			{{ HTML::style('css/custom.css') }}
			<!--[if IE 7 ]>
				{{ HTML::style('css/ink-i7.css') }}
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
									<li><a href="{{ URL::to('dashboard') }}">Homepage</a></li>
									<li><a href="{{ URL::to('flume') }}">Flume</a></li>
									<li><a href="{{ URL::to('config') }}">Configuration</a></li>
									<li><a href="{{ URL::to('logout') }}">Logout</a></li>
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


			{{ HTML::script('js/ink.min.js') }}
			{{ HTML::script('js/ink-ui.min.js') }}
			{{ HTML::script('js/autoload.js') }}
			{{ HTML::script('js/html5shiv.js') }}
			@section('footer_scripts')
			@show

	</body>
</html>
