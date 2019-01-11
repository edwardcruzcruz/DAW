
<!doctype html>

<html>

<head>

   <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</head>

<body>
<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>


<footer class="row">

    <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</footer>
<?php echo $__env->yieldContent('content_js'); ?>
</body>

</html>
