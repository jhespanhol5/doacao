<!DOCTYPE html>
<html>
<?php
session_start();
include("con_bd.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
 <title>Página Administrativa - Doações Salvam Vidas</title>
<head>
    <meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">
</head>

<body>
  
   <a href="admin.php">Página Inicial</a><br> 
    <h1> Página Administrativa - Doações Salvam Vidas </h1>
    <h1>Produtos Disponíveis</h1>

 <?php

    $pesquisar = $_POST['pesquisar'];
	$query_produtos = "SELECT prod_id, produto, quantidade, id_usuidoa, status FROM produtos WHERE produto LIKE '%$pesquisar%' AND tp_doa='e' AND status='0' ORDER BY dt_idoa asc LIMIT 1";
		
	$result_produtos = $conn->prepare($query_produtos);
	$result_produtos->execute();
		
	$linhas =$result_produtos->rowCount();
	
	if ($linhas==0){
		echo 'não há produtos disponíveis';
	}
        
	echo "<form method='POST' action='f_edit_prod_e.php'>";

   		while ($row_produto = $result_produtos->fetch(PDO::FETCH_ASSOC)) {
			extract($row_produto);
			echo "<input type='checkbox' name='produtos[$prod_id]' value='$prod_id'>";
			echo "Clique na caixa ao lado para selecionar o produto com o código: $prod_id <br>";
			echo "Produto: $produto <br>";
			echo "Quantidade: $quantidade <br>";
			echo "<hr>";
			}
	
	echo "<input type='submit' value='Enviar o Pedido' name='editProdutos'>";
    echo "</form>";
  ?>
</html>

	
	
	
	
	
	
