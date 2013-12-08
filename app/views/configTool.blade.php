@extends('layouts.master')

@section('title')
Config Tool
@stop


@section('breadcrumb')
<li><a href="#">Flume</a></li>
@stop

@section('topcontent')
<br/>
<div class="content-right"><a href="{{ URL::to('flume/addConfig') }}"><p><span class="ink-label info">Add a config</span></p></a></div>
@stop

@section('content')
@if ((count($flumeConfigs) > 0))
<table class="ink-table bordered alternating hover">
	<th>id</th>
	<th>name</th>
	<th>path</th>
	<th>isCreated</th>
	<th>delete</th>
@foreach ($flumeConfigs as $config)
	<tr>
		<td>{{ $config->id }}</td>
		<td>{{ $config->name }}</td>
		<td>{{ $config->path }}</td>
		<td>{{ $config->isCreated }}</td>
		<td><a href="{{ $config->id }}">X</a></td>
	</tr>
@endforeach
</table>
@else
<p>You don't have any config files.</p>
@endif
@stop
