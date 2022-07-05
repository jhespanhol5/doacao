<html>
    
<head>
    <meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="formulario.css" media="screen">
    
	<title>Doações Salvam Vidas</title>
		
</head>
<body>
<h2> Controle de Produtos Solicitados </h2>
<br>
<h5> Informe os dados e clique em salvar alterações </h5>
<br>
<?php
session_start();
include("conexao.php"); 
$id = $_GET["prods_id"];
settype($id, "integer");

$sql = "select * from tabprodsolic where prods_id = $id";
$query = $conexao->query($sql);
	while ($dados = $query->fetch_assoc()) {
	$id = $dados["prods_id"];
	$prodsolic = $dados["prodsolic"];
	$qde = $dados["qde"];
	$nomeb = $dados["nomeb"];
	$foneb = $dados["foneb"];
	$ag_benef = $dados["ag_benef"];
	$ct = $dados["ct"];
	$rec = $dados["rec"];
?>

<form id="form1" name="form1" method="post" action="salvar_ed.php">
Código : <input type="text" readonly name="id" id="id" value="<?php echo $id;?>" /><br>
Foi efetuado contato telefônico. S=SIM , N=NÃO? <input type="text" name="ct" placeholder="Código" id="ct" value="<?php echo $ct;?>" /><br>
Observação.: <input type="text" name="rec" id="rec" value="<?php echo $rec;?>" /><br>

Após informar os dados clique em: <input type="submit" onClick="return confirm('Deseja atualizar o registro?');" name="Submit" value="SALVAR ALTERAÇÕES" id="button-form" />
 </form>
 

 
</div></div>
<?php } ?>

</body>
</html>