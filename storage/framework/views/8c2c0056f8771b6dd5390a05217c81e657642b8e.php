<?php $__env->startSection('content_head'); ?>
<link href="<?php echo e(asset('css/style3.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="card card-container">
            

            <img id="profile-img" class="profile-img-card" src="<?php echo e(asset('imagenes/bgcolor.jpg')); ?>">

            <p id="profile-name" class="profile-name-card"></p>
	    <?php if(Session::has('mensaje_error')): ?>
                <?php echo e(Session::get('mensaje_error')); ?>

            <?php endif; ?>
            <?php echo e(Form::open(array('url' => '/login'))); ?>

                <?php echo e(Form::label('usuario', 'Usuario')); ?>

            	<?php echo e(Form::text('username', Input::old('username'), array('class' => 'form-control'))); ?>

                <?php echo e(Form::label('contraseña', 'Contraseña')); ?>

            	<?php echo e(Form::password('password', array('class' => 'form-control') )); ?>

                <div id="remember" class="checkbox">
                    <?php echo e(Form::label('lblRememberme', 'No cerrar sesión')); ?>

            	    <?php echo e(Form::checkbox('remember', true)); ?>

                </div>
		 <div align="center">
                    <?php echo e(Form::submit('Ingresar')); ?>

		</div>
            <?php echo e(Form::close()); ?>

            <p> ¿Eres nuevo?<a href="#" class="forgot-password">
                Regístrate
            </a></p>
        </div><!-- /card-container -->
    </div><!-- /container -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content_js'); ?>
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>