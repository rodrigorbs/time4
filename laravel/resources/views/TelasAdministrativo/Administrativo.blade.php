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
    <title>Administrativo</title>
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

    <!-- ----- Barra de menu ----- -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="campus/criar">Campus</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="bloco/criar">Blocos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Salas</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Rotas</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Grade</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Pesquisar</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <button type="button" class="btn btn-default navbar-btn">Logoff</button>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- ----- Fim Barra de menu ----- -->
  </body>
</html>
