<header>
	
	@include('partials.topbar')

	<div class="container main-header">
		<ul>
			<li><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo"></li>

			<li>characters</li>
			<li>comics</li>
			<li>movies</li>
			<li>tv</li>
			<li>games</li>
			<li>collectibles</li>
			<li>videos</li>
			<li>fans</li>
			<li>news</li>
			<li>shop</li>

			<li>search</li>
		</ul>
	</div>

	@include('partials.jumbotron')

</header>