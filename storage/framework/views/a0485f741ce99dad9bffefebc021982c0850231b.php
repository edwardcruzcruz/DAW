<?php $__env->startSection('content_head'); ?>
<link href="<?php echo e(asset('css/style5.css')); ?>" rel="stylesheet">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="cuerpo" class="container bootstrap snippet">
            
            <div class="row">
                
                <div  id="menulado" class="col-sm-3"><!--left col-->
                    <br>
                    
                    <div class="row">
                        <div id="user" class="col-sm-3"><h1><?php echo e(Session::get('usuario.0.Nombre','No existe sesion')); ?></h1></div>
                        <img id="profile-img" class="profile-img-card">
                                
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                                <li class="active col-12">
                                    <a href="<?php echo e(URL::to('/solicitudClient')); ?>">
                                        <i class="fa fa-inbox"></i>	Proyectos Pendientes  <span class="label pull-right">12</span>
                                    </a>
                                </li>
                            </ul><!-- /.nav -->
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="row">
                        
                                
                        <br>
                                
                                
                        <div class="panel panel-default col-12 ">
                            <div class="panel-heading col-12">Website</div>
                            <div class="panel-body col-12"><a href="http://google.com">google.com</a></div>
                        </div>
                                
                        <br>
                                
                        <div class="col-12">
                            <ul class="list-group">
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Proyectos</strong></span> 12</li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                            </ul>
                        </div>
                        <br>
                                
                        <div class="panel panel-default col-12">
                            <div class="panel-heading col-12">Social Media</div>
                            <div class="panel-heading social col-12">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--/col-3-->
                                
                                                
                <div class="col-sm-9">
		<h1 align="center">Proponer Proyecto</h1>
<?php echo e(Form::open(array('method'=>'post'))); ?>


	<?php echo e(Form::hidden('invisible', Session::get('usuario.0.Nombre','No existe sesion'))); ?>

                    <div class="form-group">
                      <?php echo e(Form::label('Titulo', 'Titulo')); ?>

        <?php echo e(Form::text('Titulo', Input::old('Titulo'), array('class' => 'form-control'))); ?>

		                          </div>
                    <div class="form-group">
                      <?php echo e(Form::label('Descripcion', 'Descripcion')); ?>

        <?php echo e(Form::text('Descripcion', Input::old('Descripcion'), array('class' => 'form-control'))); ?>

                    </div>

                    <div class="form-group">

		      <?php echo e(Form::label('Fecha', 'Fecha')); ?>

	<?php echo e(Form::date('Fecha', \Carbon\Carbon::now(),array('class' => 'form-control'))); ?>

                         

                    </div>

<?php echo e(Form::submit('Crear un nueva Propuesta', array('class' => 'btn btn-primary','id'=>'enviar'))); ?>


<?php echo e(Form::close()); ?>







                    
             </div><!--/col-9-->

                                
                
         
        
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content_js'); ?>
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo e(URL::asset('js/funcClientProject.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.defaultClient', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>