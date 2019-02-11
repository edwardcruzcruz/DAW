<nav class="navbar navbar-expand-md navbar-light   bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand"  href="inicio.html">
		<img class="logo" src="{{asset('img/black 32.png')}}">
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="{{ URL::to('home')}}">Inicio</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('servicios')}}">Servicios</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('portafolio')}}">Portafolio</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('galeria')}}">Galeria</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('contacto')}}">Contacto</a>
			</li>
             <li class="nav-item">
				<a class="nav-link" href="{{ URL::to('estadistica')}}">Más información</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('login')}}">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('registro')}}">Registrar</a>
			</li>
		</ul>
</div>
</nav>
