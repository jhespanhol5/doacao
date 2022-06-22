<!DOCTYPE html>
<html>
    
<head>
         <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Sistema de Doações</title>
</head>
</html>
<body>
<h1> Sistema de Doações </h1>
<?php
session_start();
include("conexao.php");

$logadonome = $_SESSION['nome'];

$usu_doa = "select usuario_id from usuario where nome = '{$logadonome}'";
$sqlresposta = mysqli_query($conexao, $usu_doa);
$dadosrecebidos = mysqli_fetch_array($sqlresposta);
$usuario1= $dadosrecebidos['usuario_id'];

$produto = mysqli_real_escape_string($conexao, $_POST['produto']);
$quantidade = mysqli_real_escape_string($conexao, $_POST['quantidade']);
$categoria = mysqli_real_escape_string($conexao, $_POST['categoria']);
$tp_doa = mysqli_real_escape_string($conexao, $_POST['tp_doa']);

$sql = "INSERT INTO produtos (produto, quantidade, categoria, tp_doa, id_usuidoa, dt_idoa) VALUES ('$produto', '$quantidade','$categoria','$tp_doa','$usuario1', NOW())";

if($conexao->query($sql) === TRUE) {
	echo "Dados registrados com sucesso - ";
	if($tp_doa == "doacao") {
		echo "Aguarde o nosso retorno para o agendamento e retirada do(s) medicamento(s)";
		
	} else {
		echo "O beneficiário entrará em contato";
	}
	
}

$conexao->close();

?>
<p><a href="index.php"> Página Inicial</a></p>

</body>

</html>