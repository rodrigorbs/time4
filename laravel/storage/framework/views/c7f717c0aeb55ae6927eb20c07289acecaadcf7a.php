<?php $__env->startSection('titulo'); ?>
	Cadastro de Campus
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagina'); ?>
	Campus
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
 
 <?php echo $__env->make('pages.campus.card.tableCampus', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make('pages.campus.button.button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>