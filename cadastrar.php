<?php
session_start();
include("conexao.php");
?>
<!DOCTYPE html>
<html>

    <title>Sistema de Doações</title>
    
<head>
     <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Sistema de Doações</title>
</head>

<?php
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
$numero = mysqli_real_escape_string($conexao, $_POST['numero']);
$bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
$tel_fixo = mysqli_real_escape_string($conexao, $_POST['tel_fixo']);
$tel_cel = mysqli_real_escape_string($conexao, $_POST['tel_cel']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$tp_usu = mysqli_real_escape_string($conexao, $_POST['tp_usu']);

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: aviso.php');
	exit;
}

$sql = "INSERT INTO usuario ( nome, endereco, numero, bairro, tel_fixo, tel_cel, email, usuario, senha, data_cadastro, tp_usu) VALUES ('$nome', '$endereco', '$numero', '$bairro', '$tel_fixo', '$tel_cel', '$email', '$usuario', '$senha', NOW(), '$tp_usu')";
echo "Usuário cadastrado com sucesso!"; 

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	
}

$conexao->close();

header('Location: pag_fcad_doa.html');
exit;
?>
</html>