<?php

include('../login/config.php');
	//include "conexao.php"; //mudar o nome das conexões, não sei qual é
	//include "executaSQL.php"; //mudar aqui também

	$link=conectar(); 
	$busca_query = mysql_query("SELECT * FROM usuario WHERE contaCod == $consultUsuario || contaEmail == $consultUsuario")or die(mysql_error());
		
	$dados = mysql_fetch_array($busca_query)
?>  