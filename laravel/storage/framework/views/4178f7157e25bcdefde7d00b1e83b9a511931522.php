<?php $__env->startSection('titulo'); ?>
	Cadastro de Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagina'); ?>
	Formulario Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<label>Campus</label>
<?php if(count($campus) > 1): ?>
<?php $__currentLoopData = $campus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncampus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<select class="browser-default" name="selecao">
							<option value= "<?php echo e($ncampus->id); ?>"><?php echo e($ncampus->nameCampus); ?></option>
      </select>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
<select class="browser-default" name="selecao">
		<option value="" disabled selected>Selecione</option>
</select>

<?php endif; ?>

<?php echo e(Form::open(['action' => 'BlocoController@store','method' => 'post'])); ?>

<?php echo e(Form::label('Bloco', 'Nome do Bloco')); ?>

<?php echo e(Form::text('nameBlocos','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])); ?>

<?php echo e(Form::label('Andares', 'Quantidade de Andares')); ?>

<?php echo e(Form::text('qtdAndares','',['class'=>'form-control','required','placeholder' => 'Digite aqui'])); ?>

<?php echo e(Form::submit('Cadastrar',['class'=>'btn btn-default'])); ?>

<?php echo e(Form::close()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>