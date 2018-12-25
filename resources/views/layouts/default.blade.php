
<!doctype html>

<html>

<head>

   @include('includes.head')

</head>

<body>
@include('includes.header')



<!-- image slide y una peque leyenda -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">


<ul class="carousel-indicators">
	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ul>

<div class="carousel-inner">
	<div class="carousel-item active">
		<img class="d-block w-100" src="{{asset('img/bg1.jpg')}}" alt="First slide">
		<div class="carousel-caption">
			<h1 class="display-2">Mirai Project</h1>
			<h3>Proyectos que cambian el futuro</h3>

		</div>
	</div>
	<div class="carousel-item">
		<img class="d-block w-100" src="{{asset('img/bg2.jpg')}}" alt="First slide">
	</div>
	<div class="carousel-item">
		<img class="d-block w-100" src="{{asset('img/bg3.jpg')}}" alt="First slide">
	</div>

</div>
</div>


<!-- formulario -->

<div class="container-fluid">
<div class="row jumbotron">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
		<p class="lead">Describe tu problema y las areas que involucra en nuestro formulario</p>
	</div>
	<div class="col-xs-12 col-sm12 col-md-3 col-lg-3 col-xl-2">
		<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Formulario</button></a>
	</div>
</div>
</div>

<!-- nosotros  -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Nosotros</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class="lead">Somos una empresa que Projects ofrece soluciones tecnológicas y mantenimiento de software. La empresa requiere de una landing page para hacer conocer sus productos y un medio de contacto con sus clientes. El tipo de cliente son empresarios o microempresarios que se encuentren en un rango de 18 años en adelante y pertenecen al sector informático, industrial y científico. </p>
	</div>
</div>
</div>

<!-- vision  -->

<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h2 class="display-6">Vision</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class="lead">Mejorar la calidad de analisis de datos en el ambito cientifico</p>
	</div>
</div>
</div>

<!--  mision -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h2 class="display-6">Mision</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class="lead">Lograr que nuestros clientes maximicen los beneficios de su inversion tecnologica y obtengan ventaja competitiva en su sector de negocio.</p>
	</div>
</div>
</div>


<!-- barrita de skilss -->
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-laptop-code"></i>
		<h3>Programming</h3>
		<p>100%</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-bolt"></i>
		<h3>Electronics</h3>
		<p>80%</p>
	</div>
	<div class="col-sm-12 col-md-4">
		<i class="fas fa-chart-bar"></i>
		<h3>Analisis</h3>
		<p>78%</p>
	</div>

</div>
<hr class="my-4">
</div>

<!-- eventos -->

<div class="container-fluid padding">
<div class="row padding">
	<div class="col-lg-6">
		<h2>Ganador del primer lugar del Hackeateon Nasa Challenge </h2>
		<p>
		Los integrantes del grupo estudiantil Code House participaron en la categoria 	

		</p>
		<br>
		<a href="#" class="btn btn-primary">Ver mas</a>
	</div>
	<div class="col-lg-6">
		<img src="{{asset('img/codehouse_win1.jpeg')}}" class="img-fluid">
	</div>
</div>
</div>

<hr class="my-4">


<!-- imagen estatica-->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
			
		</div>
	</div>
</figure>




<!-- organizadores -->

<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Organizadores</h1>
	</div>
	<hr>
</div>
</div>




<div id="personas" class="container-fluid">
<div class="row padding">
	<div class="col-md-6">
		<div class="card">
			<img class="card-img-top" src="{{asset('img/man.png')}}">
			<div class="card-body">
				<h4 class="card-title">Luigi Basantes</h4>
				<p class="card-text">Ingeniero en computacion</p>
				<a href="#" class="btn btn-outline-secondary">Ver perfil</a>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card">
			<img class="card-img-top" src="{{asset('img/man.png')}}">
			<div class="card-body">
				<h4 class="card-title">Juan Jose Crow</h4>
				<p class="card-text">Ingeniero en computacion</p>
				<a href="#" class="btn btn-outline-secondary">Ver perfil
			</a>
			</div>
		</div>
	</div>
</div>
</div>



<!-- redes sociales -->
<div id="logodown" class="container-fluid padding">
<div class="row text-center padding">
<div class="col-12">
	<img src="{{asset('img/black.png')}}" class="img-fluid">
</div>
</div>
<div class="row text-center padding">
<div class="col-12">
	<h3>Proyectos del futuro</h3>
</div>
</div>
</div>


<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-12">
		<h2>Mantengase conectado</h2>
	</div>
	<div class="col-12 social padding">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>

		<a href="#"><i class="fab fa-instagram"></i></a>
	</div>
</div>
</div>


<footer class="row">

    @include('includes.footer')

</footer>

</body>

</html>
