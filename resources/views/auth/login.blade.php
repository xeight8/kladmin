@extends('kladmin::master')
@section('title', 'Login')

@section('body')
	@include('kladmin::partials.errors-messages')

	{!! Form::open(['method' => 'POST', 'route' => 'kladmin.auth.authenticate', 'class' => 'form-horizontal']) !!}
	
	    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	        {!! Form::label('email', 'Email') !!}
	        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('email') }}</small>
	    </div>

	    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	        {!! Form::label('password', 'Password') !!}
	        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('password') }}</small>
	    </div>
	
	    <div class="btn-group pull-right">
	        {!! Form::submit("Log in", ['class' => 'btn btn-success']) !!}
	    </div>
	
	{!! Form::close() !!}
@endsection