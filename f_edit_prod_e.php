<?php

session_start(); 

// Limpar o buffer
ob_start();

include("con_bd.php");

// Receber os dados do formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

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
      <a href="index.php">Página Inicial</a><br> 
      <h1> Página Administrativa - Doações Salvam Vidas </h1>
    <?php
	
    if (!empty($dados['produtos'])) {
        $valor_pesq = implode(", ", $dados['produtos']);
        
        // busca produto selecionado no banco de dados
        $query_produtos = "SELECT prod_id, produto, quantidade, id_usuidoa, status 
                    FROM produtos 
                    WHERE prod_id IN ($valor_pesq)";

        // Preparar a QUERY                    
        $result_produtos = $conn->prepare($query_produtos);

        // Executar a QUERY
        $result_produtos->execute();

        echo "<h1>Produto Selecionado</h1>";

        // Inicio do formulario
        echo "<form method='POST' action='proc_ed_prod_e.php'>";

        // Ler os registros retornado do BD
        while ($row_produto = $result_produtos->fetch(PDO::FETCH_ASSOC)) {
            extract($row_produto);
            echo "<input type='hidden' name='prod_id[]' value='$prod_id'>";
            echo "Produto: $produto";
			echo ' - ';
            echo "Quantidade: $quantidade";
            echo "<hr>";
        }
	$prod_selec=$prod_id;

        echo "<input type='submit' value=' Clique aqui para Confirmar' name='editProdutos'>";

        // Fim do formulario
        echo "</form>";
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Produto não editado com sucesso!</p>";

        // Redirecionar o usuario para a pagina inicial
        header("Location: admin.php");
    }
    ?>
</body>

</html>