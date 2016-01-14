<?php $__env->startSection("title", "Home"); ?>


<?php $__env->startSection("content"); ?>

    <div class="jumbotron">
        <h1>Hello, John</h1>
        <p>Welcome to Celestini Web app</p>
        <p><a class="btn btn-primary btn-lg" href="data.php" role="button">Learn more</a></p>
    </div>

    <p>The current unix time is <?php echo e(time()); ?></p>


    <?php $__env->stopSection(); ?>
<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>