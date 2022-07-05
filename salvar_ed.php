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
<h2> Controle de Produtos Solicitados </h2>
<?php
include("conexao.php"); 
@ini_set('display_errors', '1');
error_reporting(E_ALL);

$id = $_POST["id"];
$ct = $_POST["ct"];
$rec = $_POST["rec"];

$sql = 'UPDATE tabprodsolic SET ct = ?, rec = ? WHERE tabprodsolic.prods_id = ?';

$stmt = $conexao->prepare($sql) or die($conexao->error);

if(!$stmt){
  echo 'erro na consulta: '. $conexao->errno .' - '. $conexao->error;
} else {
echo 'dados cadastrados com sucesso';
}	

$stmt->bind_param('ssi', $ct, $rec, $id);
$stmt->execute();


header("Location: relatorio_atend.php#tabs-4");
?>
</body>
<br><br><br>
<p><a href="relatorio_atend.php"> Página: Produtos Solicitados</a></p>
<br>
<p><a href="admin.php"> Página Admin</a></p>
</html>