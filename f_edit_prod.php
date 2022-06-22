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
    <?php
	
    if (!empty($dados['produtos'])) {
        $valor_pesq = implode(", ", $dados['produtos']);
        
        // Recuperar usuarios do banco de dados
        $query_produtos = "SELECT prod_id, produto, quantidade, status 
                    FROM produtos 
                    WHERE prod_id IN ($valor_pesq)";

        // Preparar a QUERY                    
        $result_produtos = $conn->prepare($query_produtos);

        // Executar a QUERY
        $result_produtos->execute();

        echo "<h1>Produto Selecionado</h1>";

        // Inicio do formulario
        echo "<form method='POST' action='proc_ed_prod.php'>";

        // Ler os registros retornado do BD
        while ($row_produto = $result_produtos->fetch(PDO::FETCH_ASSOC)) {
            extract($row_produto);
            echo "<input type='hidden' name='prod_id[]' value='$prod_id'>";
            echo "Produto: $produto";
			echo ' - ';
            echo "Quantidade: $quantidade";
            echo "<hr>";
        }

        echo "<input type='submit' value=' Clique aqui para Confirmar' name='editProdutos'>";

        // Fim do formulario
        echo "</form>";
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Produto não editado com sucesso!</p>";

        // Redirecionar o usuario para a pagina inicial
        header("Location: index.php");
    }
    ?>
</body>

</html>