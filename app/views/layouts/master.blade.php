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
		<nav class="ink-navigation hide-small">
			<ul class="menu horizontal black rounded shadowed">
				<li class="active">
					<a href="{{ URL::to('dashboard') }}"><i class="icon-home"></i></a>
					<button class="ink-for-s ink-for-m ink-button" style="display: none;">
						<i class="icon-reorder" style="height:auto"></i>
					</button>
				</li>
				<li><a href="{{ URL::to('flume') }}">Flume</a></li>
				<li><a href="{{ URL::to('config') }}">Configuration</a></li>
				<li><a href="{{ URL::to('logout') }}">Logout</a></li>
				<div class="content-right"><span class="ink-label error">@yield('title', 'Untitled Page')</span></div>
				@section('sidebar')
				@show
			</ul>
		</nav>

		<div class="ink-grid">
			<div class="column-group gutters">
				<div class="large-100 medium-100 small-100 content">
					<div class="box" id="content" name="content">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
		<footer>
			<nav class="ink-navigation">
				<ul class="menu horizontal">
				<li>
					<a href="#content"><i class="icon-level-up"></i> Return to top</a>
					</button>
				</li>
					<li><a href="https://github.com/COMU/Fluman/README.md">About</a></li>
					<li><a href="https://github.com/COMU/Fluman/issues"> Report a bug!</a></li>
				</ul>
			</nav>
		</footer>

			{{ HTML::script('js/ink.min.js') }}
			{{ HTML::script('js/ink-ui.min.js') }}
			{{ HTML::script('js/autoload.js') }}
			{{ HTML::script('js/html5shiv.js') }}
			@section('footer_scripts')
			@show

	</body>
</html>
