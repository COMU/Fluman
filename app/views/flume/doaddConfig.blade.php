@extends('layouts.master')

@section('title')
@if ($rb === 'rb1')
Create Flume Config File
@else
Upload Flume Config File
@endif
@stop

@section('content')

@if ($rb === 'rb1')

<div class="box">
	<h3>Defining the flow</h3>
	To define the flow within a single agent, you need to link the sources and sinks via a channel. You need to list the sources, sinks and channels for the given agent, and then point the source and sink to a channel. A source instance can specify multiple channels, but a sink instance can only specify one channel. The format is as follows:
	<br/>
	<div class="box">
		<code>
			# list the sources, sinks and channels for the agent</br>
			&lt;Agent&gt;.sources = &lt;Source1&gt; &lt;Source2&gt;</br>
			&lt;Agent&gt;.sinks = &lt;Sink1&gt; &lt;Sink2&gt;</br>
			&lt;Agent&gt;.channels = &lt;Channel1&gt; &lt;Channel2&gt;</br>
			<br/>
			# set channel for source</br>
			&lt;Agent&gt;.sources.&lt;Source&gt;.channels = &lt;Channel1&gt; &lt;Channel2&gt; ...</br>
			</br>
			# set channel for sink</br>
			&lt;Agent&gt;.sinks.&lt;Sink&gt;.channel = &lt;Channel1&gt;</br>
		</code>		
	</div>
	<h3>Configuring individual components</h3>
	After defining the flow, you need to set properties of each source, sink and channel. This is done in the same hierarchical namespace fashion where you set the component type and other values for the properties specific to each component:

	<div class="box">
		<code>
			# properties for sources<br/>
			&lt;Agent&gt;.sources.&lt;Source&gt;.&lt;someProperty&gt; = &lt;someValue&gt;<br/>
			<br/>
			# properties for channels<br/>
			&lt;Agent&gt;.channel.&lt;Channel&gt;.&lt;someProperty&gt; = &lt;someValue&gt;<br/>
			<br/>
			# properties for sinks<br/>
			&lt;Agent&gt;.sources.&lt;Sink&gt;.&lt;someProperty&gt; = &lt;someValue&gt;<br/>
		</code>
	</div>
	<br/>
	<div class="note content-right">Source: <a href="https://flume.apache.org/FlumeUserGuide.html#configuration">Flume User Guide</a></div>
	<button class="ink-button blue">I'm ready</button>
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
