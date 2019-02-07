<?php $__env->startSection('content_head'); ?>
<link href="<?php echo e(asset('css/style5.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="cuerpo" class="container bootstrap snippet">
            
            <div class="row">
                
                <div  id="menulado" class="col-sm-3"><!--left col-->
                    <br>
                    
                    <div class="row">
                        <div id="user" class="col-sm-3"><h1><?php echo e(Session::get('usuario.0.Nombre','No existe sesion')); ?></h1></div>
                        <img id="profile-img" class="profile-img-card" src="./imagenes/bgcolor.jpg">
                                
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
                                <li class="active col-12">
                                    <a href="<?php echo e(URL::to('/solicitud')); ?>">
                                        <i class="fa fa-inbox"></i> Proyectos Pendientes  <span class="label pull-right"><?php echo e(count(Session::get('solicitudes'))); ?></span>
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
                            <li class="list-group-item text-right"><a href="<?php echo e(URL::to('mostrarProyectos')); ?>"><span class="pull-left"><strong>Proyectos</strong></span> </a><?php echo e(count(Session::get('proyectos'))); ?></li>
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
<?php echo e(Form::open(['url' => 'guardar','method'=>'post'])); ?>


                    <div class="form-group">
			  <?php echo e(Form::label('Titulo', 'Titulo')); ?>

        <?php echo e(Form::text('Titulo', Input::old('Titulo'), array('class' => 'form-control'))); ?>

                    </div>

                    <div class="form-group">
                      <?php echo e(Form::label('Objetivo', 'Objetivo')); ?>

        <?php echo e(Form::text('Objetivo', Input::old('Objetivo'), array('class' => 'form-control'))); ?>

		                          </div>
                    <div class="form-group">
                      <?php echo e(Form::label('Descripcion', 'Descripcion')); ?>

        <?php echo e(Form::text('Descripcion', Input::old('Descripcion'), array('class' => 'form-control'))); ?>

                    </div>

                    <div class="form-group">
                      <?php echo e(Form::label('Categoria', 'Categoria')); ?>

	<?php echo e(Form::select('Categoria', array('1' => 'Aplicaciones Moviles', '2' => ' Aplicaciones Web', '3' => ' Aplicaciones Electronica'), Input::old('Categoria'), array('class' => 'form-control'))); ?>

                    </div>

                    <div class="form-group">

		      <?php echo e(Form::label('Fecha', 'Fecha')); ?>

	<?php echo e(Form::date('Fecha', \Carbon\Carbon::now(),array('class' => 'form-control'))); ?>

                         

                    </div>


                    <div class="form-group"> 
                      <?php echo e(Form::label('Materiales', 'Materiles')); ?>

        <?php echo e(Form::text('Materiales', Input::old('Materiales'), array('class' => 'form-control'))); ?>

                    </div>
		    <div class="form-group"> 
                      <?php echo e(Form::label('Materiales', 'Materiles')); ?>

        <?php echo e(Form::text('Materiales', Input::old('Materiales'), array('class' => 'form-control'))); ?>

                    </div>
		    <div class="form-group"> 
                      <?php echo e(Form::label('RutaImagenes', 'Ruta de Imagenes')); ?>

        <?php echo e(Form::text('RutaImagenes', Input::old('RutaImagenes'), array('class' => 'form-control'))); ?>

                    </div>
		    <div class="form-group"> 
					<?php echo e(Form::label('PorcentajeSkills', 'Porcentaje de Skills')); ?>

        <?php echo e(Form::number('PorcentajeSkills', Input::old('PorcentajeSkills'), array('class' => 'form-control'))); ?>

                    </div>
		    <div class="form-group"> 
                      <?php echo e(Form::label('PersonasEncargadas', 'Personas encargadas')); ?>

        <?php echo e(Form::text('PersonasEncargadas', Input::old('PersonasEncargadas'), array('class' => 'form-control'))); ?>

                    </div>

<?php echo e(Form::submit('Crear un nuevo proyecto', array('class' => 'btn btn-primary'))); ?>


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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.defaultAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>