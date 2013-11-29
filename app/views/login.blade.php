@extends('layouts.default')

@section('title')
Login
@stop



@section('content')
    <div class="column-group">
    <div class="large-20 push-center">
	<h1>Login</h1>
    <div class="box">

{{ Form::open(array('url' => 'login', 'class' => 'ink-form')) }}
	@if (Session::has('login_errors'))
		<div class="ink-alert basic error">
                	<button class="ink-dismiss">×</button>
                	<p><b>Error:</b> Username or password incorrect.</p>
		</div>
	@endif

 <fieldset>
 <div class="control-group column-group required">
		{{ Form::label('username', 'Username:', array('class' => 'large-30')) }}
 		<div class="control large-70">
			{{ Form::text('username', Input::old('username'), array('placeholder' => 'admin')) }}
		</div>
		</div>
 <div class="control-group column-group required">
		{{ Form:: label('password', 'Password: ', array('class' => 'large-30')) }}
		 <div class="control large-70">
		{{ Form::password('password') }}
		</div>
		</div>
 </fieldset>

<div class="content-right"> <button class="ink-button" type="submit"><i class="icon-key"></i> Login</button></div>
{{ Form::close() }}
</div>
</div>
</div>
@stop
