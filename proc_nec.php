<?php
session_start();
include("conexao.php");
?>
<!DOCTYPE html>
<html>
    
<head>
<meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">
	title>Sistema de Doações - Doações Salvam Vidas</title>
</head>

<body>
<h1> Sistema de Doações </h1>
<?php


$logadonome = $_SESSION['nome'];
$id_logado = intval($_SESSION['id_system']);

$produto = mysqli_real_escape_string($conexao, $_POST['produto']);
$quantidade = mysqli_real_escape_string($conexao, $_POST['quantidade']);
$nomeb = mysqli_real_escape_string($conexao, $_POST['nomeb']);
$foneb = mysqli_real_escape_string($conexao, $_POST['foneb']);

$usu_id = "select usuario_id from usuario where usuario_id = '{$id_logado}'";
$sqlresposta = mysqli_query($conexao, $usu_id);
$dadosrecebidos = mysqli_fetch_array($sqlresposta);
$usuario1= $dadosrecebidos['usuario_id'];
$ag=1;


$sql = "INSERT INTO tabprodsolic (prodsolic, qde, dt_registro, ag_benef, us_id, nomeb, foneb) VALUES ('$produto', '$quantidade', NOW(), '$ag', '$usuario1', '$nomeb', '$foneb')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	echo 'Sua necessidade foi registrada. Quando o produto estiver disponível, a entidade fará o contato';
}
$conexao->close();

?>
<p><a href="index.php"> Página Inicial</a></p>

</body>

</html>