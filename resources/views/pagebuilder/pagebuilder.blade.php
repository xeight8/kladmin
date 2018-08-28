@extends('kladmin::master')
@section('title', 'KL Admin Page Builder')

@section('body')
	<div id="page-builder">
		<main-menu></main-menu>
	</div>
@endsection

@push('scripts')
	<script type="text/javascript" src="{{ kladmin_asset('js/kladmin.pagebuilder.js') }}"></script>
@endpush