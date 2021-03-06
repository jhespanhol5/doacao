	<!DOCTYPE html>
<html>
<?php
session_start();

?>
<head>
<meta charset="utf-8"
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelo.css" media="screen">   
	<title>Sistema de Doações</title>
		
</head>

<body>	
 
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
					<h3 class="title has-text-grey">Sistema de Doações</h3>
                    <h4 class="title has-text-grey">Opção 1: Registre aqui sua intenção de doação</h4>
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
									<option value="rg">outros</option>
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
<br><br><br><br>
<h4 class="title has-text-grey"><a href="reg-doad.php">Opção 2: Se a doação já foi entregue, Clique aqui e registre a entrega da doação</a></h4>
</html>