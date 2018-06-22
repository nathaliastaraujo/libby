<?php
/* Define o limite de tempo da sessão */
session_cache_expire(120);

session_start();

//verifica se o usuário está logado
if ( ! isset( $_SESSION['logado'] ) ) {
    $_SESSION['logado'] = false;
}

// Erro do login
$_SESSION['login_erro'] = false;
 
// Variáveis da conexão
$base_dados  = 'libby';
$usuario_bd  = 'root';
$senha_bd    = 'root';
$host_db     = 'localhost';
$charset_db  = 'UTF8';
$conexao_pdo = null;

$detalhes_pdo  = 'mysql:host=' . $host_db . ';';
$detalhes_pdo .= 'dbname='. $base_dados . ';';
$detalhes_pdo .= 'charset=' . $charset_db . ';';

try {
    // Cria a conexão PDO 
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} catch (PDOException $e) {
    
    print "Erro: " . $e->getMessage() . "<br/>";
   
     die();
}
?>
