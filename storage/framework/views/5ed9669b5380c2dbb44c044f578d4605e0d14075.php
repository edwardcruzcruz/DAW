<!DOCTYPE html>
<html>
<head>
    <title>MIRAI</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e(URL::to('welcome')); ?>">Atras</a>
    </div>
</nav>

<h1>Todas los Proyectos</h1>

<!-- will be used to show any messages -->
<?php if(Session::has('message')): ?>
    <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Proyecto</td>
            <td>Objetivo</td>
            <td>Descripcion</td>
            <td>Categoria</td>
            <td>Fecha</td>
	    <td>Materiales</td>
	    <td>PorcentajeSkills</td>
            <td>Autores</td>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = Session::get('proyectos'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($proyecto->Titulo); ?></td>
            <td><?php echo e($proyecto->Objetivo); ?></td>
            <td><?php echo e($proyecto->Descripcion); ?></td>
            <td><?php echo e($proyecto->Categoria); ?></td>
	    <td><?php echo e($proyecto->Fecha); ?></td>
	    <td><?php echo e($proyecto->Materiales); ?></td>
	    <td><?php echo e($proyecto->PorcentajeSkills); ?></td>
	    <td><?php echo e($proyecto->PersonasEncargadas); ?></td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="<?php echo e(URL::to('delete/' . $proyecto->id)); ?>">Eliminar esta Pelicula</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="<?php echo e(URL::to('editar/' . $proyecto->id )); ?>">Editar esta Pelicula</a>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</div>
</body>
</html>
