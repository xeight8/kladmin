@extends('kladmin::master')
@section('title', 'KL Admin Dashboard')

@section('body')
	<header>
		<a href="{{ route('kladmin.auth.logout') }}">Log out</a>
		<a href="{{ route('kladmin.pagebuilder.index') }}">Page Builder</a>
	</header>
@endsection