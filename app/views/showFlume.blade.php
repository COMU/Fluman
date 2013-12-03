@extends('layouts.master')

@section('title')
Apache Flume
@stop

@section('content')

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

@stop
