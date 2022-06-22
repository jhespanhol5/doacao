<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>

    <title>Doações Salvam Vidas</title>
    
<head>
     <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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