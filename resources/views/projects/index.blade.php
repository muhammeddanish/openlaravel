@extends('layouts.app')

@section('title', 'A Repository Of Open Source Projects Built Using Laravel')

@push('hero')
	@include('partials.hero')
@endpush

@section('content')

<div class="columns is-multiline">
	@foreach ($projects as $project)
		<div class="column is-one-third">
			<a href="{{ url('projects/'. $project->slug) }}">
		    	<div class="card project-card is-fullwidth">
			    	<div class="card-content has-text-centered">
			        	<div class="content">
			        		<h3 class="title">
			        			{{ $project->title }}
			        		</h3>
			        		<div class="description">
			        			{{ $project->short }}
			        		</div>
			        	</div>
		      		</div>
			    </div>
			</a>
		</div>
	@endforeach
</div>

<section class="section">
    {{ $projects->links('partials.pagination') }}
</section>

@stop