<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/lightbox/css/lightbox.css" rel="stylesheet" />
    <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet" type="text/css">
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body>
    <?php echo $__env->yieldContent('header'); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
<?php echo $__env->yieldContent('footer'); ?>
</body>
</html>