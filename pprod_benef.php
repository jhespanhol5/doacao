<!DOCTYPE html>
<html>
<?php
session_start();
include("con_bd.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
 <title>Doações Salvam Vidas</title>
<head>
      <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
  
   <a href="index.php">Página Inicial</a><br> 
    <h1> Doações Salvam Vidas </h1>
    <h1>Produtos Disponíveis</h1>

 <?php

    $pesquisar = $_POST['pesquisar'];
	$query_produtos = "SELECT prod_id, produto, quantidade, status FROM produtos WHERE produto LIKE '%$pesquisar%' AND tp_doa='b' AND status='0' ORDER BY dt_idoa asc LIMIT 1";
		
	$result_produtos = $conn->prepare($query_produtos);
	$result_produtos->execute();
	
	echo "<form method='POST' action='f_edit_prod.php'>";
		
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

	
	
	
	
	
	
