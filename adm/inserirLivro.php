<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inserir Livro</title>
</head>

<body>

<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$livroCodigo = $_POST['livroCodigo'];
$livroTitulo = $_POST['livroTitulo'];
$livroISBN = $_POST['livroISBN'];
$livroAno = $_POST['livroAno'];
$livroPaginas = $_POST['livroPaginas'];
$livroTags = $_POST['livroTags'];
$livroAutor = $_POST['livroAutor'];
$livroEditora = $_POST['livroEditora'];
$livroGenero = $_POST['livroGenero'];

$conexao = mysqli_connect('localhost','root','root','libby');

if (!$conexao)
	die ("Erro de conexão com localhost. CODE ERROR: ".mysqli_error($conexao));

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao,'libby');

if (!$banco)
	die ("Erro de conexão com banco de dados. 
	CODE ERROR: ".mysqli_error($conexao));

	$query = "INSERT INTO LIVRO (livCod, livTitulo, livISBN, livANO, livNPag, livTags, autCod, editCod, GENERO_genCod) 
	VALUES ($livroCodigo, $livroTitulo, $livroISBN, $livroAno, $livroPaginas, $livroTags, $livroAutor, $livroEditora, $livroGenero)";

  mysqli_query($conexao, $query);

	echo "Livro cadastrado!!";
	header("Location:http://localhost/libby/login/login.html");
?> 
</body>
</html>
