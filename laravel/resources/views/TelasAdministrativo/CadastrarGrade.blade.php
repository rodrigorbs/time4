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
    <title>Cadastro de Grade</title>
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

    <!-- Inicio do formulario-->
    <div class="row">
      <form class="form-group" action="index.html" method="post">
        <div class="form-group">
          <div class="col-md-12">

            <div class="col-md-4">
              <label for="nomeInputSemestre">Semestre</label>
              <input type="text" class="form-control" id="" name="" placeholder="Numero do Semestre">
            </div>

            <div class="col-md-8">
              <label for="selectCurso">Curso</label>
              <select class="form-control" name="">
                <option value="">Selecione</option>
              </select>
            </div>
            </div>
            <!-- ----------------------------- -->
            <div class="col-md-12">
              <div class="col-md-6">
                <label for="selectSemana">Semana</label>
                <select class="form-control" name="">
                  <option value="">Selecione</option>
                  <option value="Segunda-feira">Segunda-feira</option>
                  <option value="Terça-feira">Terça-feira</option>
                  <option value="Quarta-feira">Quarta-feira</option>
                  <option value="Quinta-feira">Quinta-feira</option>
                  <option value="Sexta-feira">Sexta-feira</option>
                  <option value="Sabado">Sabado</option>
                  <option value="Domingo">Domingo</option>
                </select>
              </div>

            </div>
            <!-- ----------------------------- -->
            <div class="col-md-12">
              <div class="col-md-6">
                <label for="selectCampus">Campus</label>
                <select class="form-control" name="">
                  <option value="">Selecione</option>
                </select>
                <label for="selectBloco">Bloco</label>
                <select class="form-control" name="">
                  <option value="">Selecione</option>
                </select>
                <label for="selectSala">sala</label>
                <select class="form-control" name="">
                  <option value="">Selecione</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="checkbox-inline"><input type="checkbox" value="Matutino">Matutino</label>
                <label class="checkbox-inline"><input type="checkbox" value="Vespertino">Vespertino</label>
                <label class="checkbox-inline"><input type="checkbox" value="Noturno">Noturno</label>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-md-6">
              <button type="button" class="btn btn-danger" name="Cancelar">Cancelar</button>
              <button type="button" class="btn btn-primary" name="Salvar">Salvar</button>
            </div>
          </div>
        </form> <!-- Fim do formulario-->

    </div>
  </body>
</html>
