<?php $__env->startSection('titulo'); ?>
	Atualizar dados do Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagina'); ?>
	Editar Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>


  <?php echo e(Form::open(['action' => ['BlocoController@destroy', $blocos->id], 'method' => 'delete'])); ?>

  <div class="col s6 m6" align="center">
    <?php echo e(Form::label('Campus', 'Nome do Campus')); ?>

    <?php $__currentLoopData = $campus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncampus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php if($ncampus->id == $blocos->campus_idCampus): ?>
                  <?php echo e($ncampus->nomeCampus); ?>

      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</br>
  <div class="col s6 m6" align="center">
    <?php echo e(Form::label('Bloco', 'Nome do Bloco')); ?>

    <?php echo e($blocos->nameBlocos); ?>

  </div>
</br>
  <div class="col s6 m6" align="center">
    <?php echo e(Form::label('Andares', 'Quantidade de Andares')); ?>

    <?php echo e($blocos->qtdAndares); ?>

  </div>

</div>

</br></br>
    <div class="col s6 m6" align="center">
		    <a class='btn btn-default' href="<?php echo e(url('bloco')); ?>">Voltar</a>
        <a class='btn btn-default' href="/bloco/editar/<?php echo e($blocos->id); ?>">Editar</i></a>
           <?php echo e(Form::submit('Excluir?',['class'=>'btn btn-default'])); ?>


  </div>
	<?php echo e(Form::close()); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>