<!DOCTYPE html>
<html>
<?php
session_start();

?>
<head>
       <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Sistema de Doações</title>
		
</head>

<body>	
 
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
					<h3 class="title has-text-grey">Sistema de Doações</h3>
                    <h3 class="title has-text-grey">Registre aqui sua intenção de doação</h3>
					<br>
                    <div class="notification is-success">
                 
                    </div>
                    <div class="notification is-info">
                    </div>
                    <div class="box">
                        <form action="idoacao.php" method="POST">
						
						<br>
                            <div class="field">
                                <div class="control">
                                    <input name="produto" type="text" class="input is-large" placeholder="produto a ser doado" autofocus>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="quantidade" type="int" class="input is-large" placeholder="quantidade" autofocus>
                                </div>
                            </div>	
							
							<div class="field">
                                <div class="control">
								<select name="categoria">
									<option value="a">alimentos</option>
									<option value="c">calçados</option>
									<option value="h">higiene</option>
									<option value="r">roupas</option>
									<option value="rc">ração para cães</option>
									<option value="rg">ração para gatos</option>
								</select>
                                </div>
                            </div>	
							
							<div class="field">
                                <div class="control">
								<B>Escolhendo Beneficiário, os seus dados ficarão disponíveis para contato.</B><br>
								<B>Escolhendo Entidade, os seus dados ficarão disponíveis somente para a Entidade.</B>
								<select name="tp_doa">
									<option value="b">beneficiário</option>
									<option value="e">entidade</option>
								</select>
		                        </div>
						   </div>
						   <BR>					
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Clique aqui para enviar</button>
							</br>
							
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>