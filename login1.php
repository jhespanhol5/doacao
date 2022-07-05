<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>

    <title>Doações Salvam Vidas</title>
    
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
<br>
<br>
<h3> Digite o seu nome de usuário e a senha para acessar</h3>
<br>
<form action="login.php" method="POST">
    <div class="field">
        <div class="control">
           <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
        </div>
    </div>
    <div class="field">
        <div class="control">
            <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
        </div>
    </div>
    <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
</form>
</body>

</html>