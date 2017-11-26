<div class="row">
     <div class="col s3 m3">
      <div class="card hoverable">
        <div class="card-content">
          <div class="row">
          	<div class="col s6 m6">
          		<p><strong>Campus</strong></p>
							<?php $__currentLoopData = $campus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncampus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($ncampus->id == $bloco->campus_idCampus): ?>
                            <?php echo e($ncampus->nomeCampus); ?>

                <?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          	</div>

          	<div class="col s6 m6">
          		<p><strong>Bloco</strong></p>
          		<?php echo e($bloco->nomeBlocos); ?>

          	</div>

          	<div class="col s6 m6">
          		<p><strong>QTD Andares</strong></p>
          		<?php echo e($bloco->qtdAndares); ?>

          	</div>

          </div>
        </div>

        <div class="card-action" align="right">
	        <a href="/bloco/editar/<?php echo e($bloco->id); ?>">  <i class="material-icons">edit</i></a>
	        <a href="/bloco/excluir/<?php echo e($bloco->id); ?>">  <i class="material-icons">delete</i></a>
        </div>
      </div>
    </div>
</div>
