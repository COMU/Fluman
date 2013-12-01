@extends('layouts.master')

@section('title')
Configuration
@stop

@section('content')

<div class="box">

	<div class="ink-tabs top">
		<ul class="tabs-nav">
			<li><a href="#flume">Flume</a></li>
			<li><a href="#users">Users</a></li>
			<li><a href="#preferences">Preferences</a></li>
		</ul>

		<div id="flume" class="tabs-content">
			{{ Form::open(array('route' => 'doConfig', 'class' => 'ink-form')) }}
			<div class="control-group required validation error">
				{{ Form::label('path', 'Flume Wrapper Script Location:', array('class' => 'large-35')) }}
				<div class="control">
					{{ Form::text('path', Input::old('path'), array('placeholder' => '/usr/bin/flume-ng')) }}
				</div>
				<p class="tip">Current Location: <b>{{{ $flumeLocation }}}</b></p>
			</div>
			{{ Form::submit('Save') }}
			{{ Form::close() }}
			<hr>
			<a href="flume/addConfig"><button class="ink-button red">Create a Flume Agent Configuration File</button></a>
		</div>

		<div id="users" class="tabs-content">
		</div>

		<div id="preferences" class="tabs-content">
		</div>
 
	</div>

	<script>
		Ink.requireModules( ['Ink.UI.Tabs_1'], function(Tabs){
			new Tabs( '.ink-tabs',{
				disabled: ['#users', '#preferences'],
				active: '#flume',
				onBeforeChange: function(tab){
					console.log('beforeChange', tab);
				},
				onChange: function(tab){
					console.log('Changed', tab);
				}
				});
		});
	</script>

</div>

@stop
