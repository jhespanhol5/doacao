<!DOCTYPE html>
<html>
    
<head>
<meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">
   <title>Doações Salvam Vidas</title>
		
</head>
<body>
<h1> Doações Salvam Vidas </h1>
<br>
<br>
<br>
<?php
session_start();
include("conexao.php");

if(empty($_POST['usuario']) || empty($_POST['senha'])) { 
	header('Location: index.php');
	exit();
}
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome, usuario_id, tp_usu from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	
	$_SESSION['nome'] = $usuario_bd['nome'];
	$_SESSION['id_system'] = $usuario_bd['usuario_id'];
	
	$id_usu = $usuario_bd['usuario_id'];
	$tpusu = $usuario_bd['tp_usu'];
	$varb = 'b';
	
	echo '-';
		if ($tpusu == $varb) { header('Location: form_benef.php');
		} else  { header('Location: form_doa.php');}
	echo '-';
} 
else { $_SESSION['nao_autenticado'] = true; }
?>
<a href="index.php">Usuário e/ou senhas incorretos, clique para voltar para a Página Inicial</a>
</body>
</html>