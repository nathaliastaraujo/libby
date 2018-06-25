<?php

if ( ! isset( $conexao_pdo ) || ! is_object( $conexao_pdo ) ) {
	exit('-- Erro na conexão com o banco de dados.');
}

// Une $_SESSION e $POST para verificação
if ( isset( $_POST ) && ! empty( $_POST ) ) {
	$dados_usuario = $_POST;
	} else {
	$dados_usuario = $_SESSION;
}

// Verifica se os campos de usuário e senha existem
// E se não estão em branco
if ( 
	isset ( $dados_usuario['contaEmail'] ) && 
	isset ( $dados_usuario['contaSenha'] )   &&
  ! empty ( $dados_usuario['contaEmail'] ) &&
  ! empty ( $dados_usuario['contaSenha'] ) 
) {
	$pdo_checa_user = $conexao_pdo->prepare('SELECT * FROM CONTA WHERE contaEmail = ? LIMIT 1');
	$verifica_pdo = $pdo_checa_user->execute( array($dados_usuario['contaEmail']) );
	
// Verifica se a consulta foi realizada com sucesso
	if ( ! $verifica_pdo ) {
		$erro = $pdo_checa_user->errorInfo();
		exit( $erro[2] );
	}
	
	// Busca os dados da linha encontrada
	$fetch_usuario = $pdo_checa_user->fetch();

	if ( $dados_usuario['contaSenha'] === $fetch_usuario['contaSenha'] ) {
	
		// O usuário está logado
		$_SESSION['logado']       = true;
		$_SESSION['contaNome'] = $fetch_usuario['contaNome'];
		$_SESSION['contaEmail']      = $fetch_usuario['contaEmail'];
		$_SESSION['contaCod']      = $fetch_usuario['contaCod'];
		$_SESSION['contaCPF']      = $fetch_usuario['contaCPF'];
		//$_SESSION['contaPlano']      = $fetch_usuario['contaPlano'];

		header("Location:http://localhost/libby/signup/infos.html");
	} else {
		// Continua deslogado
		$_SESSION['logado']     = false;
		// Preenche o erro para o usuário
		$_SESSION['login_erro'] = 'Usuário ou senha inválidos';
		header("Location:http://localhost/libby/login/login.html");

	}
}
?>
