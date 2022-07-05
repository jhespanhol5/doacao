<?php

session_start(); //Iniciar a sessao

//Incluir a conexao com BD
include_once "./con_bd.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">
    <title>Sistema de Doações - Doações Salvam Vidas</title>

</head>

<body>
    <a href="reg-doad.php">Listar intenções de doação</a><br>
    
    <h1>Listar intenções de doação</h1>

    <?php

    // Verificar se existe a mensagem
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
	$logadonome = $_SESSION['nome'];
	$id_logado = intval($_SESSION['id_system']);
	
    //Criar a QUERY para recuperar os produtos
    $query_produtos = "SELECT prod_id, produto, quantidade, status, entrega FROM produtos WHERE id_usuidoa = $id_logado AND status='1' AND entrega!='1'";

    //Preparar a QUERY
    $result_produtos = $conn->prepare($query_produtos);

    //Executar a QUERY
    $result_produtos->execute();

    //Inicio do formulario
    echo "<form method='POST' action='form_reg_doad.php'>";

    // Ler os registros retornado do BD
    while ($row_produto = $result_produtos->fetch(PDO::FETCH_ASSOC)) {
        //var_dump($row_usuario);
        extract($row_produto);
        echo "<input type='checkbox' name='produtos[$prod_id]' value='$prod_id'>";
        //echo "ID: $id <br>";
        echo "Produto: $produto <br>";
        echo "Quantidade: $quantidade <br>";
		echo "Status: $status <br>";
		echo "Entrega: $entrega <br>";
        echo "<hr>";
    }

    echo "<input type='submit' value='Registrar Entrega' name='editprodutos'>";

    //Fim do formulario
    echo "</form>";
    ?>


</body>

</html>