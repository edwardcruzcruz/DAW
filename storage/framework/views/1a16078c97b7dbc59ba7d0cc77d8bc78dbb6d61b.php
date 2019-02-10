<!DOCTYPE html>
<html>
<head>
    <title>MIRAI</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e(URL::to('mostrarProyectos')); ?>">Atras</a>
    </div>
</nav>

<h1>Proyecto <?php echo e($data[0]->Titulo); ?></h1>
<?php echo e(Form::model($data[0],array($data[0]->id,'method'=>'put'))); ?>

<?php echo e(Form::hidden('proyecto_id', $data[0]->id)); ?>

                    <div class="form-group">
			  <?php echo e(Form::label('Titulo', 'Titulo')); ?>

        <?php echo e(Form::text('Titulo', Input::old('Titulo'), array('class' => 'form-control','id'=>'titulo'))); ?>

                    </div>

                    <div class="form-group">
                      <?php echo e(Form::label('Objetivo', 'Objetivo')); ?>

        <?php echo e(Form::text('Objetivo', Input::old('Objetivo'), array('class' => 'form-control','id'=>'objetivo'))); ?>

		                          </div>
                    <div class="form-group">
                      <?php echo e(Form::label('Descripcion', 'Descripcion')); ?>

        <?php echo e(Form::text('Descripcion', Input::old('Descripcion'), array('class' => 'form-control','id'=>'descripcion'))); ?>

                    </div>

                    <div class="form-group">
                      <?php echo e(Form::label('Categoria', 'Categoria')); ?>

	<?php echo e(Form::select('Categoria', $categorias, Input::old('Categoria'), array('class' => 'form-control','id'=>'categoria'))); ?>

                    </div>

                    <div class="form-group">

		      <?php echo e(Form::label('Fecha', 'Fecha')); ?>

	<?php echo e(Form::date('Fecha', \Carbon\Carbon::now(),array('class' => 'form-control','id'=>'fecha'))); ?>

                         

                    </div>


                    <div class="form-group"> 
                      <?php echo e(Form::label('Materiales', 'Materiales')); ?>

        <?php echo e(Form::text('Materiales', Input::old('Materiales'), array('class' => 'form-control','id'=>'materiales'))); ?>

                    </div>
		    <div class="form-group"> 
                      <?php echo e(Form::label('RutaImagenes', 'Ruta de Imagenes')); ?>

        <?php echo e(Form::text('RutaImagenes', Input::old('RutaImagenes'), array('class' => 'form-control','id'=>'rutaimagenes'))); ?>

                    </div>
		    <div class="form-group"> 
					<?php echo e(Form::label('PorcentajeSkills', 'Porcentaje de Skills')); ?>

        <?php echo e(Form::number('PorcentajeSkills', Input::old('PorcentajeSkills'), array('class' => 'form-control','id'=>'porcentajeskills'))); ?>

                    </div>
		    <div class="form-group"> 
                      <?php echo e(Form::label('PersonasEncargadas', 'Personas encargadas')); ?>

        <?php echo e(Form::text('PersonasEncargadas', Input::old('PersonasEncargadas'), array('class' => 'form-control','id'=>'personasencargadas'))); ?>

                    </div>

<?php echo e(Form::submit('Guardar proyecto', array('class' => 'btn btn-primary','id'=>'enviar'))); ?>


<?php echo e(Form::close()); ?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="<?php echo e(URL::asset('js/funcEditarProyecto.js')); ?>"></script>

</body>
</html>
