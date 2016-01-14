<?php $__env->startSection("content"); ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Village</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($results as $result): ?>
            <tr>
                <td>
                    <a href="person.php?id=<?php echo e($result->getObjectId()); ?>"><?php echo e($result->get(\app\Constant::$KEY_FIRST_NAME)); ?></a>
                </td>
                <td><?php echo e($result->get(\app\Constant::$KEY_LAST_NAME)); ?></td>
                <td><?php echo e($result->get("Village")); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>