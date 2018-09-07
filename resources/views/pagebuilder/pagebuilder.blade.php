@extends('kladmin::master')
@section('title', 'KL Admin Page Builder')

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ kladmin_asset('css/custom.pagebuilder.css') }}">
@endpush

@section('body')
	<div id="pagebuilder"></div>
@endsection

@push('scripts')
	<script type="text/javascript" src="{{ kladmin_asset('js/pagebuilder/pagebuilder.js') }}"></script>
@endpush