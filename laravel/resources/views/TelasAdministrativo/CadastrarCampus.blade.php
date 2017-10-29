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
    <title>Cadastor de Campos</title>
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
    <div class="row">
      <div class="col-md-12">
        <form class="form-group" action="index.html" method="post">
          <div class="form-group">
            <label for="nomeInputCampus">Campus</label>
            <input type="text" class="form-control" id="" name="" placeholder="Nome campus">

            <label for="nomeInputlogradouro">Logradouro</label>
            <input type="text" class="form-control" id="" name="" placeholder="Logradouro">

            <label for="nomeInputCidade">Cidade</label>
            <input type="text" class="form-control" id="" name="" placeholder="Cidade">

            <label for="selectUF">UF</label>
            <select class="form-control" name="">
              <option value="">Selecione</option>
              <option value="AC">AC</option>
              <option value="AL">AL</option>
              <option value="AM">AM</option>
              <option value="AP">AP</option>
              <option value="BA">BA</option>
              <option value="CE">CE</option>
              <option value="DF">DF</option>
              <option value="ES">ES</option>
              <option value="GO">GO</option>
              <option value="MA">MA</option>
              <option value="MG">MG</option>
              <option value="MS">MS</option>
              <option value="MT">MT</option>
              <option value="PA">PA</option>
              <option value="PB">PB</option>
              <option value="PE">PE</option>
              <option value="PI">PI</option>
              <option value="PR">PR</option>
              <option value="RJ">RJ</option>
              <option value="RN">RN</option>
              <option value="RO">RO</option>
              <option value="RR">RR</option>
              <option value="RS">RS</option>
              <option value="SC">SC</option>
              <option value="SE">SE</option>
              <option value="SP">SP</option>
              <option value="TO">TO</option>
            </select>

            <label for="nomeInputCep">Cep</label>
            <input type="text" class="form-control" id="" name="" placeholder="Cep">

            <label for="nomeInputFone">Fone</label>
            <input type="text" class="form-control" id="" name="" placeholder="Fone">

            <button type="button" class="btn btn-danger" name="Cancelar">Cancelar</button>
            <button type="button" class="btn btn-primary" name="Salvar">Salvar</button>
          </div>
        </form>
      </div>
    </div>
    <!-- ----- Fim do Formulario ----- -->
  </body>
</html>
