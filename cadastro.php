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
    <title>Sistema de Doações</title>
		
</head>

<body>
                
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Doações Salvam Vidas</h3>
					<h3 class="title has-text-grey">Preencha o formulário para realizar o seu cadastro</h3>
					<h3 class="title has-text-grey">Preencha o número do celular ou do telefone fixo para facilitar o contato</h3> <div class="notification is-success">
                 
                    </div>
                    <div class="notification is-info">
                    </div>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="endereco" type="text" class="input is-large" placeholder="Endereco" autofocus>
                                </div>
                            </div>	
							
							<div class="field">
                                <div class="control">
                                    <input name="numero" type="text" class="input is-large" placeholder="numero" autofocus>
                                </div>
                            </div>	
							
							<div class="field">
                                <div class="control">
                                    <input name="bairro" type="text" class="input is-large" placeholder="bairro" autofocus>
                                </div>
                            </div>	
							
							<div class="field">
                                <div class="control">
                                    <input name="tel_fixo" type="text" class="input is-large" placeholder="tel_fixo" autofocus>
                                </div>
                            </div>
													
							<div class="field">
                                <div class="control">
                                    <input name="tel_cel" type="text" class="input is-large" placeholder="tel_cel" autofocus>
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="email" autofocus>
                                </div>
                            </div>
							<div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
							
							<div class="field">
                                <div class="control">
								<B>Escolha Beneficiário ou Doador?</B>
								<select name="tp_usu">
									<option value="b">beneficiário</option>
									<option value="d">doador</option>
								</select>
		                        </div>
                            </div>					 
                            
													
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
							</br>
							
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>