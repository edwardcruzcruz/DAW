<?php $__env->startSection('content_head'); ?>
<link href="<?php echo e(asset('css/style5.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="cuerpo" class="container bootstrap snippet">

    <div class="row">

  		<div  id="menulado" class="col-sm-3"><!--left col-->
  			<br>
              
  			<div class="row">
		  		<div id="user" class="col-sm-3"><h1>Bienvenido <?php echo e(Session::get('usuario.0.Nombre','No existe sesion')); ?></h1></div>
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


<?php echo e(Form::model(Session::get('usuario.0'), array('url' => array('updateAdmin', Session::get('usuario.0.id')), 'method' => 'PUT'))); ?>	
						<div class="form-group">
						  <div class="col-xs-6">
						      <?php echo e(Form::label('CI', 'Cedula de Identidad')); ?>

        <?php echo e(Form::text('CI', Input::old('CI'), array('class' => 'form-control'))); ?>

						  </div>
						</div>

						<div class="form-group">
						  <div class="col-xs-6">
						      <?php echo e(Form::label('Nombre', 'Nombre')); ?>

        <?php echo e(Form::text('Nombre', Input::old('Nombre'), array('class' => 'form-control'))); ?>

						  </div>
						</div>

						<div class="form-group">
						  <div class="col-xs-6">
						      <?php echo e(Form::label('Profesion', 'Profesion')); ?>

        <?php echo e(Form::text('Profesion', Input::old('Profesion'), array('class' => 'form-control'))); ?>

						  </div>
						</div>

						<div class="form-group">
						  <div class="col-xs-6">
						      <?php echo e(Form::label('Telefono', 'Telefono')); ?>

        <?php echo e(Form::text('Telefono', Input::old('Telefono'), array('class' => 'form-control'))); ?>

						  </div>
						</div>


						<div class="form-group"> 
							<div class="col-xs-6">
						      <?php echo e(Form::label('Correo', 'Correo')); ?>

<?php echo e(Form::text('Correo', Input::old('Correo'), array('class' => 'form-control'))); ?>

						  </div>
						</div>


				    <?php echo e(Form::submit('Guardar', array('class' => 'btn btn-primary'))); ?>


<?php echo e(Form::close()); ?>


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

<?php echo $__env->make('layouts.defaultAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>