<?php $__env->startSection('titulo'); ?>
	Cadastro de Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagina'); ?>
	Formulario Bloco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="col s2 m2">

        </div>
           <div class="col s8 m8">
            <div class="card hoverable">
              <div class="card-content">
                <div class="row">

                  <label>Campus</label>
                  <select class="browser-default">
                    <option value="" disabled selected>Selecione</option>
										<?php $__currentLoopData = $blocos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bloco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value= "<?php echo e($bloco->id); ?>"><?php echo e($bloco->nameBlocos); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!--                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option> -->
                  </select>

                  <div class="input-field col s6">
                    <input id="nomeBloco" type="text" class="validate">
                    <label for="last_name">BLoco</label>
                  </div>

                  <div class="input-field col s2">
                    <input id="qtdAndares" type="text" class="validate">
                    <label for="last_name">QTD Andares</label>
                  </div>

                </div>

              </div>
              <div class="card-action">
                <a class="green darken-2 waves-light btn">
                  <i>Gravar</i>
                </a>
                <a href="/bloco" class="red lighten-2 waves-light btn"><i>Cancelar</i></a>

              </div>
            </div>
          </div>
          <div class="col s2 m2">

          </div>
      </div>
    </form>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>