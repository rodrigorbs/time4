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

    <!-- ----- Formulario ----- -->
    <form class="form-group" action="index.html" method="post">
      <div class="row">
        <div class="col-md-12">

          <label for="selectCampus">Campus</label>
          <select class="form-control" name="">
            <option value="">Selecionar</option>
          </select>

          <label for="nomeInputBloco">Bloco</label>
          <input type="text" class="form-control" id="" name="" placeholder="Bloco">

          <label for="nomeInputNumAndar">Numeros Andares</label>
          <input type="text" class="form-control" id="" name="" placeholder="Numeros Andares">

          <button type="button" class="btn btn-danger" name="Cancelar">Cancelar</button>
          <button type="button" class="btn btn-primary" name="Salvar">Salvar</button>
        </div>
      </div>
    </form>
    <!-- ----- Fim do formulario ----- -->

  </body>
</html>
