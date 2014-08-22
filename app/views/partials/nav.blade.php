<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			{{ link_to_route('home', 'Dead Reckoning Gaming', null, ['class' => 'navbar-brand']) }}
		</div>


		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav navbar-right">
				@if ($currentUser)
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $currentUser->username }} <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li>{{ link_to_route('logout_path', 'Sign Out') }}</li>
					</ul>
				</li>
				@else
				<li>{{ link_to_route('register_path', 'Join us') }}</li>
				<li>{{ link_to_route('login_path', 'Login') }}</li>
				@endif
			</ul>
		</div>
	</div>
</nav>