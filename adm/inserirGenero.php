<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inserir Genero</title>
</head>

<body>

<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$generoCodigo = $_POST['generoCodigo'];
$generoNome = $_POST['generoNome'];

include('../login/config.php');


$conexao = mysqli_connect('localhost','root','root','libby');

if (!$conexao)
	die ("Erro de conexão com localhost. CODE ERROR: ".mysqli_error($conexao));

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao,'libby');

if (!$banco)
	die ("Erro de conexão com banco de dados. 
	CODE ERROR: ".mysqli_error($conexao));

	$query = "INSERT INTO GENERO (genCod, genNome) 
	VALUES ($generoCodigo, $generoNome)";

  mysqli_query($conexao, $query);

	echo "Genero cadastrado!!";
	header("Location:http://localhost/libby/login/login.html");
/*
$erro = false;

// Verifica se algo foi postado para publicar ou editar
if ( isset( $_POST ) && ! empty( $_POST ) ) {
	// Cria as variáveis
	foreach ( $_POST as $chave => $valor ) {
		$$chave = $valor;
				// Verifica se existe algum campo em branco
		if ( empty ( $valor ) ) {
			// Preenche o erro
			$erro = 'Existem campos em branco.';
		}
	}
	
	// Verifica se as variáveis foram configuradas
	if ( empty( $contaNome ) || empty( $contaEmail ) || empty( $contaCPF ) || empty( $contaSenha ) ) {
		$erro = 'Existem campos em branco.';
		}
	
	// Verifica se o usuário existe
	$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM CONTA WHERE contaEmail = ?');
	$pdo_verifica->execute( array( $contaEmail ) );
	
	// Captura os dados da linha
	$contaCod = $pdo_verifica->fetch();
	$contaCod = $contaCod['contaCod'];
	
	// Verifica se tem algum erro
	if ( ! $erro ) {
		// Se o usuário existir mostra alert que já existe
		if ( ! empty( $contaCod ) ) {

     echo "<script type='text/javascript'>alert('Usuário já existe');</script>";
  //header("Location:http://localhost/libby/signup/infos.html");

		} else {
			$pdo_insere = $conexao_pdo->prepare('INSERT INTO CONTA (contaEmail, contaSenha, contaNome, contaCPF, contaPlano) 
			VALUES (?, ?, ?, ?, ?)');
			$pdo_insere->execute(  array("$contaEmail", "$contaSenha", "$contaNome", "$contaCPF", $_SESSION['contaPlano']));

		include('../login/verifica_login.php');
			
 echo "<script type='text/javascript'>alert('Usuário cadastrado');</script>";
header("Location:http://localhost/libby/signup/pagamento.html");

		}
		
	}
		$pdo_insere = $conexao_pdo->prepare('INSERT INTO GENERO (genCod, genNome) 
		VALUES (?, ?)');
		$pdo_insere->execute(  array("$generoCodigo", "$generoNome"));


		header("Location:http://localhost/libby/login/login.html");
*/




	
//}	


?> 
</body>
</html>