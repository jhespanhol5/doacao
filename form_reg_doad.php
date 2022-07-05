<?php

session_start(); //Iniciar a sessao

// Limpar o buffer
ob_start();

// Incluir a conexao com o banco de dados
include_once "./con_bd.php";

// Receber os dados do formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($dados);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">
    <title>Sistema de Doações</title>

</head>

<body>
    <a href="reg-doad.php">Listar</a><br>
    
    <?php

    if (!empty($dados['produtos'])) {
        
        $valor_pesq = implode(", ", $dados['produtos']);
        //var_dump($valor_pesq);

        
        $query_produtos = "SELECT prod_id, produto, quantidade, status, entrega 
                    FROM produtos 
                    WHERE prod_id IN ($valor_pesq)";

        // Preparar a QUERY                    
        $result_produtos = $conn->prepare($query_produtos);

        // Executar a QUERY
        $result_produtos->execute();

        echo "<h1>Registrar a Entrega do Produto</h1>";

        // Inicio do formulario
        echo "<form method='POST' action='proc_reg_doad3.php'>";

        // Ler os registros retornado do BD
        while ($row_produto = $result_produtos->fetch(PDO::FETCH_ASSOC)) {
            //var_dump($row_usuario);
            extract($row_produto);
            echo "<input type='hidden' name='prod_id[]' value='$prod_id'>";
            //echo "Nome: <input type='text' name='produto[]' value='$produto' placeholder='produto'><br><br>";
			echo "Nome: <input type='text' name='produto[]' value='$produto' readonly><br><br>";
            echo "Quantidade: <input type='text' name='quantidade[]' value='$quantidade' readonly><br><br>";
			echo "<input type='hidden' name='status[]' value='$status' placeholder='status'><br><br>";
			//echo "Status: <input type='text' name='status[]' value='$status' placeholder='status'><br><br>";
		    echo "<input type='hidden' name='entrega[]' value='$entrega'>";			
            echo "<hr>";
        }

        echo "<input type='submit' value='Registrar a Entrega' name='editProdutos'>";

        // Fim do formulario
        echo "</form>";
    } else {
        // Variavel global com a mensagem de sucesso
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não editado com sucesso!</p>";

        // Redirecionar o usuario para a pagina inicial
        header("Location: reg-doad.php");
    }
    ?>
</body>

</html>