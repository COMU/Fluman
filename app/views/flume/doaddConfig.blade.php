@extends('layouts.master')

@section('title')
Add Flume Config File
@stop

@section('content')

@if ($rb === 'rb1')

<div class="box">








        <div class="ink-tabs right">
                <ul class="tabs-nav">
                        <li><a href="#start">Introduction</a></li>
                        <li><a href="#config">&lt;Start&gt;</a></li>
                        <li><a href="#agent">&lt;Agent&gt;</a></li>
                        <li><a href="#source">&lt;Source&gt;</a></li>
                        <li><a href="#sink">&lt;Sink&gt;</a></li>
                        <li><a href="#channels">&lt;Channels&gt;</a></li>
                </ul>

                <div id="start" class="tabs-content">
<h3>Defining the flow</h3>
			To define the flow within a single agent, you need to link the sources and sinks via a channel. You need to list the sources, sinks and channels for the given agent, and then point the source and sink to a channel. A source instance can specify multiple channels, but a sink instance can only specify one channel. The format is as follows:
</br>
<div class="box">
			<code>
# list the sources, sinks and channels for the agent</br>
&lt;Agent&gt;.sources = &lt;Source1&gt; &lt;Source2&gt;</br>
&lt;Agent&gt;.sinks = &lt;Sink1&gt; &lt;Sink2&gt;</br>
&lt;Agent&gt;.channels = &lt;Channel1&gt; &lt;Channel2&gt;</br>
</br>
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
                </div>

                <div id="config" class="tabs-content">
                </div>

                <div id="agent" class="tabs-content">
                </div>

                <div id="source" class="tabs-content">
                </div>

                <div id="sink" class="tabs-content">
                </div>
 
                <div id="channels" class="tabs-content">
                </div>
        </div>

        <script>
                Ink.requireModules( ['Ink.UI.Tabs_1'], function(Tabs){
                        new Tabs( '.ink-tabs',{
                                disabled: ['#source', '#sink', '#channels', '#agent'],
                                active: '#start',
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
