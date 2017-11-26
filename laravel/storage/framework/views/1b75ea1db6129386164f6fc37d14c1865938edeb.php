<div class="row">
     <div class="col s4 m4">
      <div class="card hoverable">
        <div class="card-content">
          <div class="row">
          	<div class="col s6 m6">
          		<p><strong>Campus</strong></p>
              <?php echo e($ncampus->nomeCampus); ?>

          	</div>

          	<div class="col s6 m6">
          		<p><strong>Logradouro</strong></p>
              <?php echo e($ncampus->logradouro); ?>

          	</div>

          	<div class="col s6 m6">
          		<p><strong>Cidade</strong></p>
              <?php echo e($ncampus->cidade); ?>

          	</div>

          	<div class="col s6 m6">
          		<p><strong>Uf</strong></p>
              <?php echo e($ncampus->uf); ?>

          	</div>

          	<div class="col s6 m6">
          		<p><strong>Cep</strong></p>
              <?php echo e($ncampus->cep); ?>

          	</div>

          	<div class="col s6 m6">
          		<p><strong>Fone</strong></p>
              <?php echo e($ncampus->telefone); ?>

          	</div>
          </div>

        </div>
        <div class="card-action" align="right">
	        <a href="/campus/editar/<?php echo e($ncampus->id); ?>">  <i class="material-icons">edit</i></a>
	        <a href="/campus/excluir/<?php echo e($ncampus->id); ?>">  <i class="material-icons">delete</i></a>
        </div>
      </div>
    </div>
</div>
