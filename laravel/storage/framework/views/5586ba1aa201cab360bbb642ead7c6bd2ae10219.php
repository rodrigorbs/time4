<?php $__env->startSection('titulo'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagina'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="row">
    <h5 class="center">Bem vindo ao Localize</h5>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>