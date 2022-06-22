<?php

session_start(); 

ob_start(); 

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

 <h1> Doações Salvam Vidas </h1>
 <body>
<?php
// Receber os dados formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$logadonome = $_SESSION['nome'];
$id_logado = intval($_SESSION['id_system']);

if(!empty($dados['editProdutos'])){

    //Ler os do do formulario
    foreach($dados['prod_id'] as $chave => $prod_id){
		$n_status = 1;
		$query_produto = "UPDATE produtos SET status=1, id_benef=$id_logado WHERE prod_id=:prod_id";
        $edit_produto = $conn->prepare($query_produto);

        $edit_produto->bindParam(':prod_id', $dados['prod_id'][$chave]);

        // Executar QUERY
        $edit_produto->execute();
    }

    // Redirecionar o usuario para a pagina inicial
	
    echo '   sua solicitação para receber o produto foi registrada, o próximo passo é contatar o doador';
	//header("Location: index.php");

}else{
     // Variavel global com a mensagem de sucesso
     $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não editado com sucesso!</p>";

     // Redirecionar o usuario para a pagina inicial
     header("Location: index.php");
}
?>
</body>

</html>