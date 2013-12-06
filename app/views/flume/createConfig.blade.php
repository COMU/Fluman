@extends('layouts.master')

@section('title')
Create Flume Config File
@stop

@section('content')
		<fieldset>
			{{ Form::open(array('route' => 'doConfig', 'class' => 'ink-form')) }}
			<div class="control-group required">
				{{ Form::label('path', 'Name:', array('class' => 'large-20')) }}
				<div class="control">
					{{ Form::text('name', Input::old('name'), array()) }}
				</div>
				<p class="tip">Please provide a name to your config file</p>
			</div>
			<div class="control-group required">
				{{ Form::label('path', 'Name:', array('class' => 'large-20')) }}
				<div class="control large-100 append-symbol">
					<span>
					{{ Form::text('agent', Input::old('agent'), array()) }}
					<i class="icon-barcode"></i>
					</span>
				</div>
				<p class="tip">Eg; <code><Agent>.sources = <Source1> <Source2></code>. &lt;Agent&gt;</p>
			</div>
			<div class="control-group required">
				{{ Form::label('path', 'Name:', array('class' => 'large-20')) }}
				<div class="control large-100 append-symbol">
					<span>
					{{ Form::text('agent', Input::old('agent'), array()) }}
					<i class="icon-barcode"></i>
					</span>
				</div>
				<p class="tip">Eg; <code></code>. &lt;Agent&gt;</p>
			</div>
		</fieldset>
			<a href="#agent"><button class="ink-button blue">Next Step</button></a>
                </div>


@stop
