<nav class="navbar navbar-expand-md navbar-light   bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand"  >
		<img class="logo" src="{{asset('img/black 32.png')}}">
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="{{ URL::to('/welcome')}}">Proyecto</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="{{ URL::to('/mostrarClientes')}}">Usuarios</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('/solicitud')}}">Solicitudes</a>
			</li>
             <li class="nav-item">
				<a class="nav-link" href="{{ URL::to('/reporte')}}">Reporte</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('/perfil')}}">Perfil</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="{{ URL::to('/logout')}}">Cerrar Sesion</a>
			</li>
		</ul>
</div>
</nav>
