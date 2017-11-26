<?php $__env->startSection('titulo'); ?>
	Cadastro de Campus
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagina'); ?>
	Campus
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
 <?php $__empty_1 = true; $__currentLoopData = $campus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncampus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
 		<?php echo $__env->make('pages.campus.card.tableCampus', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

	<?php endif; ?>


 <?php echo $__env->make('pages.campus.button.button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <?php if(Session::has('mensagem')): ?>
 				<?php echo Session::get('mensagem'); ?>

 <?php endif; ?>

 <?php if(Session::has('msg')): ?>
 				<?php echo Session::get('msg'); ?>

 <?php endif; ?>
 <?php if(Session::has('delMsg')): ?>
 				<?php echo Session::get('delMsg'); ?>

 <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>