<!DOCTYPE html>
<html>
<?php
session_start();

?>
<head>
    <meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">
   <title>Página Administrativa - Sistema de Doações</title>
		
</head>

<body>	
   <h1>Página Administrativa - Doações Salvam Vidas</h1>
   <h1>Pesquisar Produtos Disponíveis</h1>
<form method="POST" action="pprod_benef_e.php">
    Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
    <input type="submit" value="ENVIAR">
</form>
</body>

</html>