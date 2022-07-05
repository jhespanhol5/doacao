<!DOCTYPE html>
<html>
    
<head>
<meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">
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
		echo "Aguarde o contato para retirada da doação";
		
	} else {
		echo "O beneficiário entrará em contato";
	}
	
}

$conexao->close();

?>
<p><a href="index.php"> Página Inicial</a></p>

</body>

</html>