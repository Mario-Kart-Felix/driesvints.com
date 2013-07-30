@include('header')

<div class="row">
	<div class="col-lg-12">
		<div class="page-header">
			<h1><a href="{{ route('home') }}">Dries Vints</a> <small>Web Developer and Open-Source Enthusiast</small></h1>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-9">
		@yield('content')
	</div>

	<div class="col-lg-3 about">
		@section('about')
			<p>
				<span class="avatar-frame"><img src="http://www.gravatar.com/avatar/e8321183acdf47a9ce838afd13a964b5.jpg?s=200" /><span>
			</p>
			
			<p>
				Dries is a web developer from Belgium. He spends his days working a day time job in the city of Antwerp, collaborating on open-source projects or writing for his blog. He also does a weekly blog post series called "Laravel Weekly" at <a href="http://laravel.io">Laravel.io</a> and writes documentation manuals for <a href="http://cartalyst.com">Cartalyst</a>.
			</p>
			
			<p class="social-icons">
				<a href="https://twitter.com/driesvints"><i class="icon-twitter"></i>
				<a href="https://github.com/driesvints"><i class="icon-github"></i></a>
				<a href="mailto:dries.vints@gmail.com"><i class="icon-envelope"></i></a>
			</p>
		@show
	</div>
</div>

<hr>

<div class="row">
	<div class="col-lg-12">
		<p class="pull-left">Copyright &copy; {{ date('Y') }} Dries Vints</p>

		<p class="pull-right"><a href="#">back to top</a></p>
	</div>
</div>

@include('footer')