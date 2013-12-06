@extends('layouts.master')

@section('title')
Create Flume Config File
@stop

@section('content')

<div class="box">
			{{ Form::open(array('route' => 'doConfig', 'class' => 'ink-form')) }}

			<div class="control-group required">
				{{ Form::label('path', 'Name:', array('class' => 'large-20')) }}
				<div class="control large-100 append-symbol">
					<span>
					{{ Form::text('name', Input::old('name'), array()) }}
					<i class="icon-barcode"></i>
					</span>
				</div>
				<p class="tip">Please provide a name to your config file</p>
			</div>
			<h4>Sources, Sinks and Channels for the agent</h4>
			<hr/>
			<fieldset>
			<div class="control-group required">
				{{ Form::label('path', '&lt;Agent&gt;:', array('class' => 'large-20')) }}
				<div class="control large-100 append-symbol">
					<span>
					{{ Form::text('agent', Input::old('agent'), array()) }}
					<i class="icon-gear"></i>
					</span>
				</div>
				<p class="tip">Eg; <code>agent_1</code></p>
			</div>
			<div class="control-group required">
				{{ Form::label('path', '&lt;Sources&gt;:', array('class' => 'large-20')) }}
				<div class="control large-100 append-symbol">
					<span>
					{{ Form::text('sources', Input::old('sources'), array()) }}
					<i class="icon-gear"></i>
					</span>
				</div>
				<p class="tip">Eg; <code>Source1 Source2</code></p>
			</div>
			<div class="control-group required">
				{{ Form::label('path', '&lt;Sinks&gt;:', array('class' => 'large-20')) }}
				<div class="control large-100 append-symbol">
					<span>
					{{ Form::text('sinks', Input::old('sinks'), array()) }}
					<i class="icon-gear"></i>
					</span>
				</div>
				<p class="tip">Eg; <code>Sink1 Sink2</code></p>
			</div>
			<div class="control-group required">
				{{ Form::label('path', '&lt;Channels&gt;:', array('class' => 'large-20')) }}
				<div class="control large-100 append-symbol">
					<span>
					{{ Form::text('channels', Input::old('channels'), array()) }}
					<i class="icon-gear"></i>
					</span>
				</div>
				<p class="tip">Eg; <code>Channel1 Channel2</code></p>
			</div>
			<h4>Channels for the source</h4>
			<hr/>
			<div class="control-group required">
				{{ Form::label('path', '&lt;Channels&gt;:', array('class' => 'large-20')) }}
				<div class="control large-100 append-symbol">
					<span>
					{{ Form::text('sourceChannels', Input::old('sourceChannels'), array()) }}
					<i class="icon-gear"></i>
					</span>
				</div>
				<p class="tip">Eg; <code>Channel1 Channel2</code></p>
			</div>
			<h4>Channel for the sink</h4>
			<hr/>
			<div class="control-group required">
				{{ Form::label('path', '&lt;Channel&gt;:', array('class' => 'large-20')) }}
				<div class="control large-100 append-symbol">
					<span>
					{{ Form::text('sinkChannel', Input::old('sinkChannel'), array()) }}
					<i class="icon-gear"></i>
					</span>
				</div>
				<p class="tip">Eg; <code>Channel</code></p>
			</div>
			</fieldset>
			<div class="content-right"><a href="#agent"><button class="ink-button blue">Next Step</button></a></div>
                </div>
</div>

@stop
