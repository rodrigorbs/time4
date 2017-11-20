<?php $__env->startSection('titulo'); ?>
	Cadastro de Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagina'); ?>
	Formulario Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <?php $__currentLoopData = $campus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncampus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value= "<?php echo e($ncampus->id); ?>"><?php echo e($ncampus->nomeCampus); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo e(Form::open(['action' => 'BlocoController@store'])); ?>

    <?php echo e(Form::label('Bloco', 'nameBlocos')); ?>

    <?php echo e(Form::text('nameBlocos','',['class'=>'form-control','required','placeholder' => nameBlocos])); ?>

    <?php echo e(Form::submit('Cadastrar',['class'=>'btn btn-default'])); ?>

    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>