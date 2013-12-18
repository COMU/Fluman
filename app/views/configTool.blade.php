@extends('layouts.master')

@section('title')
Config Tool
@stop


@section('breadcrumb')
<li><a href="#">Flume</a></li>
@stop

@section('topcontent')
@stop

@section('content')

<div class="ink-grid">
    <div class="column-group gutters">
        <div class="large-33 medium-30 small-100">
            <div class="ink-dropdown green large-100" style="height: 300px; overflow-y: scroll;">
                <ul style="display: block; position: static;" class="dropdown-menu dropdown1" id="">
                    <li class="heading active">Sources</li>
                    <li class="separator-above active"><a href="#">Exec</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                </ul>
                <br>
            </div>

        </div>
        <div class="large-33 medium-30 small-100">
            <div class="ink-dropdown blue large-100" style="height: 300px; overflow-y: scroll;">
                <ul style="display: block; position: static;" class="dropdown-menu dropdown1" id="">
                    <li class="heading active">Channels</li>
                    <li class="separator-above active"><a href="#">Memory</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                </ul>
                <br>
            </div>

        </div>
        <div class="large-33 medium-30 small-100">
            <div class="ink-dropdown red large-100" style="height: 300px; overflow-y: scroll;">
                <ul style="display: block; position: static;" class="dropdown-menu dropdown1" id="">
                    <li class="heading active">Sinks</li>
                    <li class="separator-above active"><a href="#">File Roll</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                    <li class="separator-above"><a href="#">Option</a></li>
                </ul>
                <br>
            </div>

        </div>

        <br>

    </div>
    <hr>


    <div class="column-group gutters">
        {{ Form::open(array('route' => 'configTool', 'class' => 'ink-form')) }}
        <div class="large-95">
            <div class="control-group large-50 medium-50 small-50">
                <div class="control">
                    {{ Form::text('configName', '', array('placeholder' => 'Provide a name to your config.')) }}
                </div>
            </div>
        </div>
    </div>




</div>
<div class="content-right">
<h5>Showcase</h5>
</div>

<div class="box">

            <div class="large-100">

    <div class="button-group">
        <div class="content-center">
        <button class="ink-button green">source</button>-
        <button class="ink-button blue">channel</button>-
        <button class="ink-button red">sink</button>
    </div>
    </div>

            </div>

</div>
<hr>
<div class="large-100">
    <div class="column-group gutters">
<div class="control append-button content-center">
    <button class="ink-button"><i class="icon-save"></i> Save</button>
    <button class="ink-button"><i class="icon-refresh"></i> Reset</button>
</div>
</div>
</div>

@stop

@section('footer_scripts')
@stop