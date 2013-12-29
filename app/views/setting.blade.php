@extends('layouts.master')

@section('title')
Setting
@stop

@section('content')

	<div class="ink-tabs top">
		<ul class="tabs-nav">
			<li><a href="#flume">Flume</a></li>
			<li><a href="#users">Users</a></li>
			<li><a href="#preferences">Preferences</a></li>
		</ul>

		<div id="flume" class="tabs-content">
			{{ Form::open(array('route' => 'doSetting', 'class' => 'ink-form')) }}
			<div class="control-group required validation error">
				{{ Form::label('path', 'Flume Wrapper Script Location:', array('class' => 'large-35')) }}
				<div class="control">
					{{ Form::text('path', Input::old('path'), array('placeholder' => '/usr/bin/flume-ng')) }}
				</div>
				<p class="tip">Current Location: <b>{{{ $Setting->flumePath }}}</b></p>
				<p class="tip" id="flumeVersion">Current Version: {{{ $Setting->flumeVer }}}</p>
			</div>
			{{ Form::submit('Save', array('class' => 'ink-button blue')) }}
			{{ Form::close() }}
			<button onclick="checkVersion()" class="ink-button blue">Check Version</button>
			<hr>
			<a href="flume/addConfig"><button class="ink-button red">Create a Flume Agent Configuration File</button></a>
		</div>

		<div id="users" class="tabs-content">
		</div>

		<div id="preferences" class="tabs-content">
		</div>
 
	</div>




@stop


@section('footer_scripts')
	<script>
		function checkVersion() {
			var xmlHttp = null;
			xmlHttp = new XMLHttpRequest();
			xmlHttp.open("GET","{{ URL::to('api/version') }}",true);
			xmlHttp.onreadystatechange=function() {
				if (xmlHttp.readyState==4) {
					if (xmlHttp.status!=404) {
						obj = JSON.parse(xmlHttp.responseText);
						document.getElementById("flumeVersion").innerHTML = "";
						document.getElementById("flumeVersion").innerHTML = "Current Version: " + obj.version;
					} else {
						alert("Error");
					}
				}
			}
			xmlHttp.send(null);
		}
	</script>
	
@stop
