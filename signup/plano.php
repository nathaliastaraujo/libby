<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Plano</title>
</head>

<body>
<?php 

include('../login/config.php');

if (isset($_POST['options'])) {
	var_dump($_POST);
	$_SESSION['contaPlano'] = 1;
} else {
    var_dump("não escolheu nenhuma opção");
}
			
	header("Location:http://localhost/libby/signup/infos.html");

?> 
</body>
</html>
