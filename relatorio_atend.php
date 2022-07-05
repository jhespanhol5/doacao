<html>
    
<head>
    <meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">
    
	<title>Doações Salvam Vidas</title>
<p><a href="admin.php"> Página Admin</a></p>	
		
</head>
<body>
<h2> Doações Salvam Vidas - Controle de Produtos Solicitados</h2>
<br>
<h4>Relação de Produtos Solicitados por possíveis beneficiários - Faça o contato telefônica caso necessário e registre alguma observação<h4>
<br>
<?php 
include("conexao.php"); 
?>


<body>
<table border="1"> 
<tr>
<td>código</td>
<td>Produto Solicitado</td>
<td>Quantidade Solicitada</td>
<td>Nome Beneficiário</td>
<td>Fone Beneficiário</td>
<td>Contato Telefônico</td>
<td>Observação</td>
<td>Editar</td>
</tr>

<?php 
$sql = "SELECT prods_id, prodsolic, qde, ag_benef, nomeb, foneb, ct, rec FROM tabprodsolic WHERE ag_benef='1'";


$query = $conexao->query($sql);
while ($dados = $query->fetch_assoc()) {
	$id        = $dados["prods_id"];
	$prodsolic      = $dados["prodsolic"];
	$qde = $dados["qde"];
	$nomeb = $dados["nomeb"];
	$foneb = $dados["foneb"];
	$ag_benef = $dados["ag_benef"];
	$ct = $dados["ct"];
	$rec = $dados["rec"];
	

		
?>	
<tr>
	<td><?php echo $id;?></td>
	<td><?php echo $prodsolic;?></td>
	<td><?php echo $qde;?></td>
	<td><?php echo $nomeb;?></td>
	<td><?php echo $foneb;?></td>
	<td><?php echo $ct;?></td>
	<td><?php echo $rec;?></td>
	<td><?php echo "<a href=\"ed.php?prods_id=$id\">Editar</a>";?></td>
	</tr>
</body>


<?php } ?>


</html>
