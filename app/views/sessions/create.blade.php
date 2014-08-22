@extends('layouts.default')

@section('content')

@include('partials.errors')

<div class="row">
	<div class="col-sm-6 col-sm-offset-1">
		{{ Form::open(['route' => 'login_path', 'class' => 'form-horizontal', 'role' => 'form']) }}

		<div class="form-group">
			<label for="email" class="col-sm-4 control-label">Email</label>
			<div class="col-sm-8">
				<input type="email" class="form-control" id="email" name="email" value="{{ Input::old('email') }}">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-4 control-label">Password</label>
			<div class="col-sm-8">
				<input type="password" class="form-control" id="password" name="password">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
				<button type="submit" class="btn btn-primary">Sign In</button>
			</div>
		</div>
		{{ Form::close() }}
	</div>
</div>
@stop