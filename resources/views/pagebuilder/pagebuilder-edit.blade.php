@extends('kladmin::master')
@section('title', 'KL Admin Page Builder')

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ kladmin_asset('css/pagebuilder.css') }}">
@endpush

@section('body'){{ $slug }}
	<div id="pagebuilder">
		<pagebuilder v-bind:slug="{{ $slug }}"></pagebuilder>
	</div>
@endsection

@push('scripts')
	<script type="text/javascript" src="{{ kladmin_asset('js/pagebuilder/pagebuilder.js') }}"></script>
@endpush