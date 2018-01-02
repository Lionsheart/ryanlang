<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet" type="text/css">
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
<?php echo $__env->yieldContent('header'); ?>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>

    </div>

<?php echo $__env->yieldPushContent('scripts'); ?>
<?php echo $__env->yieldContent('footer'); ?>
</body>
</html>