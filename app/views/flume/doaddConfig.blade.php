@extends('layouts.master')

@section('title')
Add Flume Config File
@stop

@section('content')

@if ($rb === 'rb1')

<div class="box">

        <div class="ink-tabs right">
                <ul class="tabs-nav">
                        <li><a href="#start">Start</a></li>
                        <li><a href="#agent">&lt;Agent&gt;</a></li>
                        <li><a href="#source">&lt;Source&gt;</a></li>
                        <li><a href="#sink">&lt;Sink&gt;</a></li>
                        <li><a href="#channels">&lt;Channels&gt;</a></li>
                </ul>

                <div id="start" class="tabs-content">
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
