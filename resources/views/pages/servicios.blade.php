@extends('layouts.default')
 
@section('content')
	<div class="box">
	<div class="container">
	<div class="row">


	<!--APLIACIONES WEB-->
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	<div id="box1" class="box-part text-center">
		              
	    <i class="fas fa-laptop"></i>
	  
		<div class="title_servicios">
			<h4>Aplicaciones Web</h4>
		</div>
	       
	    

		<div class="text_servicios">
		<span>Estamos especializados en proveer soluciones empresariales, enfocadas en agregarle valor a su cliente y ofrecerle una excelente experiencia al usuario.</span>
		</div>
		                 
	</div>
	</div>	


	<!--APLIACIONES MOVIL-->
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div id="box2" class="box-part text-center">
		              
	    <i class="fas fa-mobile-alt"></i>
	  
		<div class="title_servicios">
			<h4>Aplicaciones Moviles</h4>
		</div>
		                
		<div class="text_servicios">
		<span>Estamos especializados en proveer soluciones empresariales integradas en smartphones, enfocadas en agregarle valor a su cliente y ofrecerle una excelente experiencia al usuario.</span>
		</div>
		                 
	</div>
	</div>	


	<!--APLIACIONES ELECTRONICAS-->
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div id="box3" class="box-part text-center">
		              
	    <i class="fas fa-microchip"></i>
	  
		<div class="title_servicios">
			<h4>Aplicaciones Electronicas</h4>
		</div>
		                
		<div class="text_servicios">
		<span>Soluciones electronicas para el desarrollo en la investigacion. Especializados en el uso de microcontroladores y tecnologia FPGA. Creacion de placas PCB.</span>
		</div>
		                 
	</div>
	</div>	



	</div>
	</div>
	</div>



	<!--AQUI TERMINA JE-->






	<div class = "my-4">
			<hr>
		</div>
		<div class="container-fluid">
			<div class="row text-center ">
				<header  class="col-12"><h2>Aplicaciones Web</h2></header>
				<div id="imageW" class="col-xs-12 col-sm12 col-md-8 col-lg-8 col-xl-8">
					<img alt src="./imagenes_empresa/Ventanas-Forumpol/log_in.png" class ="image-fluid">
				</div>
				<div class="col-xs-12 col-sm12 col-md-4 col-lg-4 col-xl-4 text-center">
					      <p >Estamos especializados en proveer soluciones empresariales, enfocadas en agregarle valor a su cliente y ofrecerle una excelente experiencia al usuario.</p>
				</div>
			</div>
			
		</div>
		<div class = "my-4">
			<hr>
		</div>
		<div class="container-fluid">
			<div class="row text-center ">
				<header class="col-12"><h2> Aplicaciones Moviles</h2></header>
				<div id="imageM" class="col-xs-12 col-sm12 col-md-8 col-lg-8 col-xl-8 " >
					<img alt src="./imagenes_empresa/Ventanas-Llapanmi/log_in.jpeg" class ="image-fluid">
				</div>
				<div class="col-xs-12 col-sm12 col-md-4 col-lg-4 col-xl-4 text-center">
					      <p >Estamos especializados en proveer soluciones empresariales integradas en smartphones, enfocadas en agregarle valor a su cliente y ofrecerle una excelente experiencia al usuario.   </p>
				</div>
			</div>
		</div>
		<div class = "my-4">
			<hr>
		</div>







		<div class="container-fluid">

			<div class="row text-center ">
				<header id="webYES" class="col-12"><h2> Aplicaciones Electronicas</h2></header>
				<div id="imageE" class="col-xs-12 col-sm12 col-md-8 col-lg-8 col-xl-8">
					<img alt src="./imagenes/bg1.jpg" class ="image-fluid">
				</div>
				<div class="col-xs-12 col-sm12 col-md-4 col-lg-4 col-xl-4 text-center">
					      <p >Soluciones electronicas para el desarrollo en la investigacion.</p>
				</div>
			</div>
			
		</div>
		
		<div class = "my-4">
			<hr>
		</div>



		<div>
			<inframe src="./Grafico/graphic/dot.html"></inframe>

		</div>
@stop
@section('content_js')
	<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="./js/java.js"></script>
@stop
