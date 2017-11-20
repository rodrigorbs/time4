<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br">
<title>IESB |  <?php echo $__env->yieldContent('titulo'); ?></title>

<head>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('images/logoSimbolo.png')); ?>" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/materialize.css')); ?>" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/iesb.css')); ?>" media="screen,projection">

        <?php echo $__env->yieldContent('css'); ?>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="<?php echo e(asset('js/jquery-3.1.1.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/materialize.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>

        <?php echo $__env->yieldContent('js'); ?>

</head>
    <body>

        <?php echo $__env->make('template.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <nav>
            <div class="nav-wrapper cor-default">
                <a  href            ="#"
                    data-activates  ="mobile-demo"
                    class           ="button-collapse">
                    <i class="material-icons">menu</i>
                </a>

                <a href="/" class="brand-logo">
                    IESB
                </a>

                <span class="pagina-atual hide-on-med-and-down">
                    <?php echo $__env->yieldContent('pagina'); ?>
                </span>

                <span class="pagina-atual-mobile right hide-on-large-only">
                    <?php echo $__env->yieldContent('pagina'); ?>
                </span>

                <ul  class="right hide-on-med-and-down">
                    <li class="navbar-img">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                            <img src="<?php echo e(route('perfil.image')); ?>" style="width:40px; height:40px; position:absolute; top:14px; left: 0px; border-radius:50%">
                             <span class="caret"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php echo $__env->yieldContent('conteudo'); ?>
    </body>
</html>
