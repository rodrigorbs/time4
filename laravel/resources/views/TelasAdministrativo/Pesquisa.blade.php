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

    <title>Pesquisar</title>
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
      <!-- ----- inicio do formulario ----- -->
      <form class="form-group" action="index.html" method="post">
        <div class="form-group">

          <div class="col-md-6">
            <label for="nomeInput">Pesquisar</label>
            <input type="text" class="form-control" id="" name="" placeholder="Pesquisar">
          </div>

          <div class="col-md-3">
            <label for="selectOpcao">Selecione</label>
            <select class="form-control" name="">
              <option value="">Selecione</option>
            </select>
          </div>

          <div class="col-md-3">
            <button type="button" class="btn">Pesquisar
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </div>
        </div>

      </form>
      <!-- ----- Fim do formulario ----- -->

    </div>




    <!-- Conteiner que agrupa os dados da tabela.-->
    <div class="conteiner">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Codigo</th>
              <th>Nome</th>
              <th>Logradouro</th>
              <th>Ação</th>
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
                Nome
              </td>
              <td>
                <!-- ----- informação que vem do banco depois do formulario submetido. ----- -->
                Logradouro
              </td>
              <td>
                <button type="button" class="btn btn-default" aria-label="Alinhar na esquerda">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default" aria-label="Alinhar na esquerda">
                  <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <button type="button" class="btn btn-danger" name="sair"> Sair </button>
    </div>

  </body>
</html>
