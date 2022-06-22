<!DOCTYPE html>
<html>
    
<head>
        <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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