@extends('layouts.master')

@section('title')
Apache Flume
@stop

@section('content')
	<div class="ink-alert block info">
		<button class="ink-dismiss">&times;</button>
		<h4>Creating flume agent configuration file</h4>
		<p>Flume agent configuration is read from a file that resembles a Java property file format with hierarchical property settings. You have two options to create the file within Fluman;
		</p>
		<ul>
			<li>Use our step by step solution</li>
			<li>Just upload the file</li>
		</ul>

	</div>
	<div class="box">
		<form action="asd" class="ink-form">
			<fieldset>
			<legend>What Is It Gonna Be?</legend>
			<div class="control-group">
				<p class="label">Please select one of these options</p>
				<ul class="control unstyled">
					<li><input type="radio" id="rb1" value="" name="rb"><label for="rb1">I want to create configuration file step by step</label></li>
					<li><input type="radio" id="rb2" value="" name="rb"><label for="rb2">I want to upload my configuration file</label></li>
				</ul>
			</div>
			</fieldset> 
		</form>	
<button class="ink-button blue">Next Step</button>                    
	</div>

@stop
