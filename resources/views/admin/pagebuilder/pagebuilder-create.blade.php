@extends('kladmin::master')
@section('title', 'KL Admin Page Builder')

@push('styles')
	<link rel="stylesheet" type="text/css" href="{{ kladmin_asset('css/pagebuilder.css') }}">
@endpush

@section('body')
	<section>
		<div class="container">
			@include('kladmin::partials.errors-messages')
			
			{!! Form::open(['method' => 'POST', 'route' => 'kladmin.pagebuilder.store', 'class' => 'form-horizontal']) !!}
			
			    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
			        {!! Form::label('title', 'Page title') !!}
			        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'onChange' => 'setSlug(this.value, "page-slug")']) !!}
			        <small class="text-danger">{{ $errors->first('title') }}</small>
			    </div>

				{!! Form::hidden('slug', null, ['class' => 'page-slug']) !!}

			    <div class="form-group{{ $errors->has('slug-display') ? ' has-error' : '' }}">
			        {!! Form::label('slug-display', 'Page slug - You can access the page by adding the slug to your website URL.') !!}
			        {!! Form::text('slug-display', null, ['class' => 'form-control page-slug', 'required' => 'required', 'disabled' => 'disabled']) !!}
			        <small class="text-danger">{{ $errors->first('slug-display') }}</small>
			    </div>

			    <div class="btn-group pull-right">
			        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
			    </div>
			
			{!! Form::close() !!}
		</div>
	</section>
@endsection

@push('scripts')
<script type="text/javascript">
	var setSlug = function(value, targetClass) {
		$('.'+targetClass).val(KladminHelpers.slugify(value));
	}
</script>
@endpush