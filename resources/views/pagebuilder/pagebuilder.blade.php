@extends('kladmin::master')
@section('title', 'KL Admin Page Builder')

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ kladmin_asset('css/pagebuilder.css') }}">
@endpush

@section('body')
	<div id="page-builder">
		<pagebuilder-page></pagebuilder-page>
	</div>
@endsection

@push('scripts')
	<script type="text/javascript" src="{{ kladmin_asset('js/kladmin.pagebuilder.js') }}"></script>
@endpush