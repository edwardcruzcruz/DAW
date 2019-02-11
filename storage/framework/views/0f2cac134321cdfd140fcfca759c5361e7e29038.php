<?php $__env->startSection('content_head'); ?>
<link href="<?php echo e(asset('css/style3.css')); ?>" rel="stylesheet">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="card card-container">
            	
        	<h2>Cuentanos de tus ideas y nosotros lo haremos posible.</h2>


<?php echo e(Form::open(array('method'=>'post'))); ?>

    



                <div class="form-group">
					<?php echo e(Form::label('CI', 'Cedula de Identidad')); ?>

        <?php echo e(Form::text('CI', Input::old('CI'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('Nombre', 'Nombre Completo')); ?>

        <?php echo e(Form::text('Nombre', Input::old('Nombre'), array('class' => 'form-control'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('Profesion', 'Profesion')); ?>

	<?php echo e(Form::select('Profesion', array('Docente' => 'Docente', 'Estudiante' => 'Estudiante', 'Empresa pequeña (startups)' => 'Empresa pequeña (startups)', 'Empresa grande (más de 100 empleados)' => 'Empresa grande (más de 100 empleados)','Organización sin fines de lucro' => 'Organización sin fines de lucro','Uso personal'=>'Uso personal'), Input::old('Profesion'), array('class' => 'form-control','id'=>'profesion'))); ?>

        
				</div>


				<div class="form-group">
					<?php echo e(Form::label('Telefono', 'Telefono')); ?>

        <?php echo e(Form::text('Telefono', Input::old('Telefono'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('Edad', 'Edad')); ?>

        <?php echo e(Form::number('Edad', Input::old('Edad'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('NombreEmpresa', 'Nombre Empresa o Institucion')); ?>

        <?php echo e(Form::text('NombreEmpresa', Input::old('NombreEmpresa'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('Correo', 'Correo')); ?>

	<?php echo e(Form::text('Correo', Input::old('Correo'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('username', 'Nombre de Usuario')); ?>

	<?php echo e(Form::text('username', Input::old('username'), array('class' => 'form-control'))); ?>

				</div>
				<div class="form-group">
					<?php echo e(Form::label('password', 'Contraseña')); ?>

	<?php echo e(Form::password('password', array('class' => 'form-control'))); ?>

				</div>
                <?php echo e(Form::submit('Registrar Usuario', array('class' => 'btn btn-primary','id'=>'enviar'))); ?>


<?php echo e(Form::close()); ?>

            
        </div><!-- /card-container -->
    </div><!-- /container -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content_js'); ?>
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo e(URL::asset('js/funcRegistrar.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>