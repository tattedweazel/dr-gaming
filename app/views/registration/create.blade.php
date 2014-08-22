@extends('layouts.default')

@section('content')

	<h1>Become a part of something awesome.</h1>

	@include('partials.errors')

	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			{{ Form::open(['route' => 'register_path', 'class' => 'form-horizontal', 'role' => 'form']) }}
				<div class="form-group">
					<label for="username" class="col-sm-4 control-label">Username</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="username" name="username" value="{{ Input::old('username') }}">
					</div>
				</div>
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
					<label for="password_confirmation" class="col-sm-4 control-label">Password Confirmation</label>
					<div class="col-sm-8">
						<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" class="btn btn-primary">Go</button>
					</div>
				</div>
			{{ Form::close() }}
		</div>
	</div>

@stop