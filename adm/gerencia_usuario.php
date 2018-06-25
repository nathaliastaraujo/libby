<html>
<head>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon.ico"/>
  <link rel="icon" href="favicon.ico" type="image/x-icon"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <title>Libby - Administrador: Usuário</title>
</head>
<body>
	<script type="text/javascript" src="scriptLimMax.js"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="http://localhost/libby/index.html">
        <img src="logo.png" / width="150" height="80" ></a>
    <div class=text-right>
      <a class="btn btn-outline-info" href="http://localhost/libby/login/login.html" role="button">Sair</a>
    </div>
  </nav>
  <p><h6><center><b> GERENCIAR USUÁRIO </b></center></h6></p>
  <h7><center>Informe o ID ou email do usuário que deseja consultar:
  <input type="text" class="form-control" id="consultUsuario" name="consultUsuario" placeholder="douglas@adams.com"> </center></h7>
  <p><div class="container">
    <form id="cadastroAutor" name="cadastroAutor" method="POST" action="inserirAutor.php">
		<div class="form-group row">
        <label for="inputCodigo" class="col-sm-2 col-form-label">Código Autor:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="livroCodigo" name="livroCodigo" placeholder="10">  
        </div>
      </div>
      <div class="form-group row">
        <label for="inputNome" class="col-sm-2 col-form-label">Nome completo:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="autorNome" name="autorNome" placeholder="John Ronald Reuel Tolkien (J. R. R. Tolkien)">  
        </div>
      </div>
      <div class="form-group row">
        <label for="inputBio" class="col-sm-2 col-form-label">Bio (máx. 150):</label>
        <div class="col-sm-10">
			<textarea type="value" class="form-control" name="" onkeyup="countPublishCharactersAbout(this)" style="resize: none" id="autorBio" name="autorBio" placeholder="Nascido em 1892, J. R. R. Tolkien foi um premiado escritor, professor universitário e filólogo britânico, conhecido por suas obras de fantasia, como O Hobbit e Senhor dos Anéis."></textarea>
        </div> <!-- a intenção era deixar igual ao twitter, mas deu bug e ainda não consegui resolver -->
      </div>
	 <center><input a class="btn btn-info btn-lg" name="livro" id="livro" type="submit"></a></center>
  
  </form>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
