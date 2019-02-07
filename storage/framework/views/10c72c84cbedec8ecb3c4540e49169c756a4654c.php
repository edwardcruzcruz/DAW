<?php $__env->startSection('content_head'); ?>
<link href="<?php echo e(asset('css/style5.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="cuerpo" class="container bootstrap snippet">
            
            <div class="row">
                
                <div  id="menulado" class="col-sm-3"><!--left col-->
                    <br>
                    
                    <div class="row">
                        <div id="user" class="col-sm-3"><h1><?php echo e(Session::get('usuario.0.Nombre')); ?></h1></div>
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
                        
                                
                        
                                
                        <div class="col-12">
                            <ul class="list-group">
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Proyectos</strong></span> <?php echo e(count(Session::get('proyectos'))); ?></li>
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

                	<table class="table table-inbox table-hover">
                            <tbody>
			    <?php $__currentLoopData = Session::get('solicitudes'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr class="">
                              	  <td class="view-message dont-show"><?php echo e($solicitud->Nombre); ?> </td>
                                  <td class="view-message"><h5><?php echo e($solicitud->Titulo); ?></h5><br><p><?php echo e($solicitud->Descripcion); ?></p></td>
                                  <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message text-right"><?php echo e($solicitud->Fecha); ?></td>
                                  <td class="inbox-small-cells">
                                      <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Aceptar</button>
                                  </td>
                                  <td class="inbox-small-cells">
                                      <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Rechazar</button>
                                  </td>
                                 
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            
                              
                          </tbody>
                          </table>

                    
             </div> <!--/col-9-->
                                
                
         
        
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