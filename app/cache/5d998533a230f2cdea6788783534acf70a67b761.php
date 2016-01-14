<h1>Hello John</h1>
<h2>Details from parse.com</h2>

<?php foreach($results as $result): ?>
    <li><?php echo e($result->get(\app\Constant::$KEY_FIRST_NAME) . ' - ' . $result->get(\app\Constant::$KEY_LAST_NAME)); ?> </li>
<?php endforeach; ?>
