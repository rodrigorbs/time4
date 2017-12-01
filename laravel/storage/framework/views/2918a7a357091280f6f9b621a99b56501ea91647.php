<?php $__env->startSection('titulo'); ?>
	Atualizar dados do Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagina'); ?>
	Editar Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>


	<?php echo e(Form::open(['action' => ['BlocoController@update', $blocos->id], 'method' => 'put'])); ?>

	<?php echo e(Form::label('Campus', 'Nome do Campus')); ?>

	<select class="browser-default" name="selecao">
			<?php $__empty_1 = true; $__currentLoopData = $campus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncampus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
							<option value= "<?php echo e($ncampus->id); ?>"><?php echo e($ncampus->nomeCampus); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<option value="" disabled selected>Selecione</option>
			<?php endif; ?>
	</select>


	<?php echo e(Form::label('Bloco', 'Nome do Bloco')); ?>

	<?php echo e(Form::text('nomeBlocos',$blocos->nomeBlocos,['class'=>'form-control','required','placeholder' => 'Digite aqui'])); ?>

	<?php echo e(Form::label('Andares', 'Quantidade de Andares')); ?>

	<?php echo e(Form::text('qtdAndares',$blocos->qtdAndares,['class'=>'form-control','required','placeholder' => 'Digite aqui'])); ?>

		<a class='btn btn-default' href="<?php echo e(url('bloco')); ?>">Voltar</a>
	<?php echo e(Form::submit('Atualizar',['class'=>'btn btn-default'])); ?>

	<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>