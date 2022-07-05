<?php

session_start(); 

ob_start(); 

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

 <h1> Página Administrativa - Doações Salvam Vidas </h1>
 <body>
<?php
// Receber os dados formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


$logadonome = $_SESSION['nome'];
$id_logado = intval($_SESSION['id_system']);

if(!empty($dados['editProdutos'])){

    //Ler formulario
    foreach($dados['prod_id'] as $chave => $prod_id){
		$n_status = 1;
		$query_produto = "UPDATE produtos SET status=1, id_benef=$id_logado WHERE prod_id=:prod_id";
        $edit_produto = $conn->prepare($query_produto);

        $edit_produto->bindParam(':prod_id', $dados['prod_id'][$chave]);

        // Executar QUERY
        $edit_produto->execute();
		
    }

$query_produto = "SELECT prod.produto, prod.quantidade, prod.id_usuidoa, prod.id_benef, usr.nome, usr.tel_fixo, usr.tel_cel FROM produtos prod INNER JOIN usuario AS usr ON prod.prod_id=$prod_id";
    $result_produto = $conn->prepare($query_produto);
	$result_produto->bindParam(':id_benef',$id);
	$result_produto->bindParam(':produto',$produto);
	$result_produto->bindParam(':quantidade',$quantidade);
	$result_produto->bindParam(':id_usuidoa',$id_usuidoa);
	$result_produto->bindParam(':nome',$nome);
	
    $result_produto->execute();
	$row_produto= $result_produto->fetch(PDO::FETCH_ASSOC);
	extract($row_produto);
	echo "Produto: $produto <br>";
	echo "Quantidade: $quantidade <br>";
  
	$id_doador=intval($id_usuidoa);
   
	$query_usuario = "SELECT nome, tel_fixo, tel_cel FROM usuario WHERE usuario_id=$id_doador";
	$result_usuario = $conn->prepare($query_usuario);
	$result_usuario->bindParam(':nome',$nome);
	$result_usuario->bindParam(':tel_fixo',$tel_fixo);
	$result_usuario->bindParam(':tel_cel',$tel_cel);
    $result_usuario->execute();
	$row_usuario= $result_usuario->fetch(PDO::FETCH_ASSOC);
	extract($row_usuario);
	echo "Nome do Doador: $nome <br>";
	echo "Telefone fixo: $tel_fixo <br>";
	echo "Telefone Celular: $tel_cel <br>";
	echo "Faça o contato com o doador, para combinar a melhor forma de retirada ou recebimento";
   

}else{
     // mensagem
     $_SESSION['msg'] = "<p style='color: #f00;'>Erro: A escolha do produto não foi confirmada</p>";

     // Redirecionar para a pagina inicial
     header("Location: admin.php");
}
?>
<br>
<a href="admin.php">Página Inicial</a>
</body>

</html>