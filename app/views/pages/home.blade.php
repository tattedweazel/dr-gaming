@extends('layouts.default')

@section('content')
	<div class="jumbotron">
		<h1>Dead Reckoning</h1>
		<p class="lead">Home of cool stuff and cool people. You want to be a part of this. Srsrly.</p>
		@if (! $currentUser )
			<p>
				{{ link_to_route('register_path', 'Join us', null, ['class' => 'btn btn-large btn-primary']) }}
			</p>
		@endif
	</div>
@stop