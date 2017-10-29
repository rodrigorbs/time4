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
    <title>Localizar Salas</title>
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
<div class="row">

</div>
    <div class="col-md-12">
      <div class="col-md-6">
        <label for="selectCampus">Campus</label>
        <select class="form-control" name="">
          <option value="">Selecionar</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="selectBloco">Bloco</label>
        <select class="form-control" name="">
          <option value="">Selecionar</option>
        </select>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6">
        <label for="selectSala">Salas</label>
        <select class="form-control" name="">
          <option value="">Selecionar</option>
        </select>
      </div>
      <div class="col-md-12">
        <button type="button" class="btn">Localizar
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </div>

    </div>
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Sala</th>
              <th>Orientação</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <!-- ----- informação que vem do banco depois do formulario submetido. ----- -->
                000
              </td>
              <td>
                <!-- ----- informação que vem do banco depois do formulario submetido. ----- -->
                Orientação
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-12">
      <button type="button" class="btn btn-danger" name="Voltar"> Voltar </button>
    </div>
  </body>
</html>
