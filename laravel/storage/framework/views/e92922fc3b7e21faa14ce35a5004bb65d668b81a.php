<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IESB |  <?php echo $__env->yieldContent('titulo'); ?></title>

    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('images/sau-icon.png')); ?>" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/materialize.css')); ?>" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/iesb.css')); ?>" media="screen,projection">


    <script type="text/javascript" src="<?php echo e(asset('js/jquery-3.1.1.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/materialize.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>

</head>

<body class="login-container bg-slate-800" >
  <?php echo e(Html::script('js/jquery-3.1.1.min.js')); ?>

  <?php echo e(Html::script('js/bootstrap.imn.js')); ?>

<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <div class="content-wrapper">

            <?php echo $__env->yieldContent('conteudo'); ?>

        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
</div>
<!-- /page container -->
</body>
</html>
