@extends('layouts.master')

@section('title')
Add Flume Config File
@stop

@section('content')

@if ($rb === 'rb1')

	<div class="box">
	</div>
@else

	<div class="box">
{{ Form::open(array('route' => 'uploadConfig', 'class' => 'ink-form', 'files' => true)) }}
		<div class="control-group required">
			<fieldset>
			<label for="file-input">Upload your config file</label> 
			<div class="control">
				<div class="input-file">
					{{ Form::file('config'); }}
				</div>
				<label for="name">Name:</label> 
				{{ Form::text('name', Input::old('name'), array()) }}
			</div>
			</fieldset>
			<input class="ink-button blue" type="submit" value="Upload">

		</div>
{{ Form::close() }}
	</div>


@endif

@stop
