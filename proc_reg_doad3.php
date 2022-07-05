<?php

session_start(); //Iniciar a sessao

// Limpar o buffer
ob_start(); 

// Incluir a conexao com o banco de dados
include_once "./conexao.php";
?>
<!DOCTYPE html>
<html>

    <title>Sistema de Doações</title>
    
<head>
<meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">
	
   
	<title>Doações Salvam Vidas</title>
</head>

<body>
      
      <h1> Doações Salvam Vidas </h1>

<?php
// Receber os dados formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($dados);


if(!empty($dados['editProdutos'])){
	   
	foreach($dados['prod_id'] as $chave => $prod_id){
		
	 $ident = $dados['prod_id'][$chave];
	 $ent = 1; 
	 
    $sql = "update produtos set
            entrega = '1' where prod_id = .$ident LIMIT 1";
	$result = mysqli_query($conexao, $sql);

		if($conexao->query($sql) === TRUE) {
	echo "Doação registrada com sucesso - ";
	} else {
		echo "Ocorreu um erro";
	}
$conexao->close();
    }
}else{
        // Redirecionar o usuario para a pagina inicial
     header("Location: reg-doad.php");
}
?>
<br>
<br>
<br>
<a href="index.php">Página Inicial</a>
</body>
</html>