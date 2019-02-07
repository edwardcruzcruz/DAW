<?php $__env->startSection('content_head'); ?>
<link href="<?php echo e(asset('css/style5.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a align="left" href="/logout">Cerrar sesión.</a>

<div id="cuerpo" class="container bootstrap snippet">

    <div class="row">

  		<div  id="menulado" class="col-sm-3"><!--left col-->
  			<br>
              
  			<div class="row">
		  		<div id="user" class="col-sm-3"><h1>Bienvenido <?php echo e(Session::get('usuario.Nombre','No existe sesion')); ?></h1></div>
		    </div>

	      	<div class="text-center">
		        <img id="profile-img" class="profile-img-card" src="<?php echo e(asset('imagenes/bgcolor.jpg')); ?>">
	            <p id="profile-name" class="profile-name-card">Cambiar tu foto de perfil</p>
		        <input type="file class="text-center center-block">
	    	</div>

			<br>

               
			<div class="panel panel-default">
				<div class="panel-heading">Website</div>
				<div class="panel-body"><a href="http://google.com">google.com</a></div>
			</div>
          
          	<br>

			<ul class="list-group">
				<li class="list-group-item text-right"><span class="pull-left"><strong>Proyectos</strong></span> 12</li>
				<li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
			</ul> 
             
            <br>

			<div class="panel panel-default">
				<div class="panel-heading">Social Media</div>
				<div class="panel-heading social">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
         
        </div><!--/col-3-->




    	<div class="col-sm-9">
 
			<div class="tab-content">

	            <div class="tab-pane active" id="home">
	            	<br>
	                
					<form class="form" action="##" method="post" id="registrationForm">

						<div class="form-group">
						  <div class="col-xs-6">
						      <label for="first_name"><h4>Nombre</h4></label>
						      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nombre" title="enter your first name if any.">
						  </div>
						</div>

						<div class="form-group">
						  <div class="col-xs-6">
						    <label for="last_name"><h4>Apellido</h4></label>
						      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellido" title="enter your last name if any.">
						  </div>
						</div>

						<div class="form-group">
						  <div class="col-xs-6">
						      <label for="phone"><h4>Telefono</h4></label>
						      <input type="text" class="form-control" name="phone" id="phone" placeholder="04 2211111" title="enter your phone number if any.">
						  </div>
						</div>

						<div class="form-group">
						  <div class="col-xs-6">
						     <label for="mobile"><h4>Telefono Movil</h4></label>
						      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="+593 900000000" title="enter your mobile number if any.">
						  </div>
						</div>


						<div class="form-group"> 
							<div class="col-xs-6">
						      <label for="email"><h4>Email</h4></label>
						      <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
						  </div>
						</div>


						<div class="form-group">
						  <div class="col-xs-6">
						      <label for="email"><h4>Direción</h4></label>
						      <input type="email" class="form-control" id="location" placeholder="somewhere" title="ingrese una dirección>
						  </div>
						</div>

						<div class="form-group">
						  <div class="col-xs-6">
						      <label for="password"><h4>Contraseña</h4></label>
						      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" title="enter your password.">
						  </div>
						</div>


						<div class="form-group">
						  <div class="col-xs-6">
						    <label for="password2"><h4>Verificar Contraseña</h4></label>
						      <input type="password" class="form-control" name="password2" id="password2" placeholder="Contraseña" title="enter your password2.">
						  </div>
						</div>


						<div class="form-group">
						   <div class="col-xs-12">
						        <br>
						      	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Guardar</button>
						       	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
						    </div>
						</div>

					</form>
	            </div>
  
    		</div>

		</div><!--col-9-->

	</div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('content_js'); ?>
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>