<?php $__env->startSection('content_head'); ?>
<link href="<?php echo e(asset('css/style3.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="container">
        <div class="card card-container">
            	
        	<h2>Cuéntanos de tus ideas y nosotros lo haremos posible.</h2>
            <form class="form-signin">
            	
                <div class="form-group">
					<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
				</div>

				<div class="form-group">
					<select class="form-control">
					  <option>Cuéntanos a qué te dedicas</option>
					  <option>Docente</option>
					  <option>Estudiante</option>
					  <option>Empresa pequeña (startups)</option>
					  <option>Empresa grande (más de 100 empleados)</option>
					  <option>Organización sin fines de lucro</option>
					  <option>Uso personal</option>
					</select>
				</div>


				<div class="form-group">
					<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
				</div>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Registrar</button>
            </form><!-- /form -->
            
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