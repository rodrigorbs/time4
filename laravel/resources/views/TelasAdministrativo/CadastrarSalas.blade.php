<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="estilo.css" rel="stylesheet">
    <title>Cadastro de Bloco</title>
  </head>
  <body>
    <!-- ----- Cabeçalho do sistema ----- -->
    <div class="row">
      <div class="col-md-12">
          <div class="col-md-3">
            <img src="LogoIesb.png" alt="LogoIesb.png" class="img-thumbnail">
          </div>
          <div class="col-md-6">
            <h1>LOCALIESB<small> Sistema de Localização </small></h1>
          </div>
      </div>
    </div>
    <!-- ----- Fim do Cabeçalho do sistema ----- -->

    <!-- Formulario -->
    <div class="row">
      <div class="col-md-12">
        <form class="form-group" action="index.html" method="post">

          <label for="selectCampus">Campus</label>
          <select class="form-control" name="">
            <option value="">Selecionar</option>
          </select>

          <label for="selectBloco">Bloco</label>
          <select class="form-control" name="">
            <option value="">Selecionar</option>
          </select>

          <label for="nomeInputSala">Nome da sala</label>
          <input type="text" class="form-control" id="" name="" placeholder="Nome da Sala">

          <label for="nomeInputAndar">Andar</label>
          <input type="text" class="form-control" id="" name="" placeholder="Numero do Andar">

          <label for="nomeInputCapacidadeSala">Capacidade da Turma</label>
          <input type="text" class="form-control" id="" name="" placeholder="Capacidade da Sala">

          <button type="button" class="btn btn-danger" name="Cancelar">Cancelar</button>
          <button type="button" class="btn btn-primary" name="Salvar">Salvar</button>

        </form>
      </div>
    </div>
    <!-- Inicio do formulario -->
  </body>
</html>
