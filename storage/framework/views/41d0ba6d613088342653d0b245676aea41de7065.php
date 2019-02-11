	<?php $__env->startSection('content'); ?>
	
<section class="col-12">
				<header class="col-12">
					<h1 align="center">Contacto</h1>
				</header>
				<h2 class="col-12" align="center">Sientase libre de enviarnos sus consultas</h2>
</section>

	<section id="contact">
	  <div class="container">
	    <div class="well well-sm">
	      <h3><strong>Contactenos</strong></h3>
	    </div>
		
		
		<div class="row">
           <div class="col-6 col-xs-12">
              <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4810.166740874929!2d-80.060531228084!3d-2.2057754036988757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d766438406507%3A0xdf1daa6f70e7a28d!2sUrb.+Valle+Alto%2C+Guayaquil!5e0!3m2!1ses!2sec!4v1540612089032"  frameborder="0" style="border:0" allowfullscreen></iframe> <!--width="600" height="450"-->
              </div>
           </div>
            <div class="col-md-5">
                 <h4><strong>Mantengase conectado</strong></h4>
            
                 <?php echo Form::open(['route'=>'mail.store','method'=>'POST']); ?>

                        <div class="col-md-12 contact-left form-group">
                                <?php echo Form::text('name',null,array('class'=>'form-control','placeholder' => 'Nombres/Apellidoss')); ?>

                        </div>
                        <div class="col-md-12 contact-left form-group">
                                 <?php echo Form::text('email',null,array('class'=>'form-control','placeholder' => 'E-mail')); ?>

                        </div>
                        <div class="col-md-12 contact-left form-group">
                                <?php echo Form::text('telf',null,array('class'=>'form-control','placeholder' => 'Teléfono')); ?>

                        </div>
                        <div class="col-md-12 contact-left form-group">
                                <?php echo Form::textarea('mensaje',null,array('class'=>'form-control','rows' => 3,'placeholder' => 'Descripción del problema')); ?>

                        </div>
                         <div class="col-md-12 contact-right form-group">
                                <?php echo Form::submit('Enviar', array('class' => 'from-control btn btn-large btn-primary openbutton')); ?>     
                        </div>
                        <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo Form::close(); ?>

            </div>
          </div>
      </div>
     </section>

	
<!-- redes sociales -->

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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content_js'); ?>
	<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>