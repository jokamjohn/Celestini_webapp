<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent("title"); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets("/css/bootstrap.css")); ?>">
</head>
<body>

<?php echo $__env->make("nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
    <?php echo $__env->yieldContent("content"); ?>
</div>


<script src="<?php echo e(assets("/js/bootstrap.js")); ?>"></script>
</body>
</html>