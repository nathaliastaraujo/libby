<?php
session_start();

$_SESSION = array();
session_destroy();

// Redireciona para o login.php
header('location: ../login.php');
