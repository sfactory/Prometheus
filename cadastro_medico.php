<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PROMETHEUS</title>

	<!--bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<style>
		.jumbotron {
			background-color: #F9FAFB; 
			margin-left: auto;
			margin-right: auto;
			width: 600px;
			box-shadow: 2px 2px 5px;
			margin-top: 25px;
			
		}
		h1 {
			text-align: center;
			font-family: 'Open Sans', sans-serif;
		}

		body{
			background-image: url(img/home.jpg);
			background-size: 1366px auto;

		}

		.footer {
			font-weight: bold;
			background-color: #DDE5E5;
			height: 50px;
			padding-top: 15px;
			padding-right: 10px;
			position: relative;
			bottom: 0px;
			width: 100%;
			left: 0px;

			
		}
		.container {
			margin: 20px auto;
			padding: 20px;
			margin-left: auto;
			margin-right: auto;

		}
		
		.drop {
			width: 25%;
		}

		#menu {

			background-color: #F7F3F3;
		}

	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
  		<a class="navbar-brand" href="home.html">&nbsp;&nbsp;Prometheus</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    		<span class="navbar-toggler-icon"></span>
  		</button>
	  	<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
	    	<ul class="navbar-nav mr-auto">
	      		<li class="nav-item active">
	        		<a class="nav-link" href="home.html">Início</a>
	      		</li>
	      		<li class="nav-item dropdown">
	        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>
	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          		<a class="dropdown-item" href="cadastro_medico.html">Médico</a>
	          		<a class="dropdown-item" href="cadastro_enfermeiro.html">Enfermeiro</a>
	          		<a class="dropdown-item" href="cadastro_tecnico.html">Técnico</a>
	          		<a class="dropdown-item" href="cadastro_paciente.html">Paciente</a>
	          		<a class="dropdown-item" href="cadastro_maqueiro.html">Maqueiro</a>
	          	</div>
	          	<li class="nav-item dropdown">
	        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prontuários</a>
	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          		<a class="dropdown-item" href="prontuario_cadastro.html">Cadastro</a>
	          		<a class="dropdown-item" href="prontuario_consulta.html">Consulta</a>
	      		</li>
	          	<li class="nav-item dropdown">
	        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medicamentos</a>
	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        		<a class="dropdown-item" href="medicamentos_cadastro.html">Cadastro</a>
	          		<a class="dropdown-item" href="medicamentos_consulta.html">Consulta</a>
	     		<li class="nav-item">
	        		<a class="nav-link" href="about.html">Sobre</a>
	      		</li>
	           		<li class="nav-item active">
	        			<a class="nav-link" href="index.html">Logout</a>
	      			</li>
	      	</div>
	    	</ul>
	    	<form class="form-inline my-2 my-lg-0">
	      		<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
	      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
	    	</form>
	  </div>
	</nav>
	<div id="main" class="container-fluid"></div>
		
		<div class="jumbotron">
			<h1>Cadastro Médico</h1>
			<br/>
			<hr/>
			<br/>
				<form action="" method="post" class="form-row">                  
	                    
	                <div class="form-group col-md-6">    
						<label for="crm">* CRM</label>
		                <input name="crm" type="number" id="crm" class="form-control" placeholder="Informe o número do CRM">
	                </div>

					<div class="form-group col-md-12">
		                <label for="nome">* Nome</label>
		                <input name="nome" type="text" id="nome" class="form-control" placeholder="Digite seu nome" >
	                </div>
					
					<div class="form-group col-sm-12">
		                <label for="email">* E-mail</label>
		                <input name="email" type="email" id="email" class="form-control" placeholder="aaa@gmail.com">
					</div>

					<div class="form-group col-md-7">    
						<label for="senha">* Senha</label>
		                <input name="senha" type="password" id="senha" class="form-control" placeholder="Digite uma senha">
	                </div>

					<div class="form-group col-sm-6">
		                <label for="fixo">Telefone</label>
		                <input name="fixo" type="number" id="fixo" class="form-control" placeholder="(21) 3333-4444" id="telefone">
	            	</div>
					
					<div class="form-group col-sm-6">
		                <label for="celular">Celular</label>
		                <input name="celular" type="text" id="celular" class="form-control" placeholder="(21) 99222-3344" id="celular">
	            	</div>

					<div class="form-group col-sm-6">
		                <label for="nasc">Data de Nascimento</label>
		                <input name="nasc" type="date" id="nasc" class="form-control" placeholder="dd/mm/aaaa" id="data">
					</div>

	              	<br/>

	              	<div class="form-group col-sm-4">
	                <label for="sexo">Sexo</label>
		                <select name="sexo" id="sexo" class="custom-select mr-sm-2">
		                  <option>Selecione</option>
		                  <option>Masculino</option>
		                  <option>Feminino</option>
		                </select>
	            	</div>
					

					<div class="form-group col-sm-12">
		                <label for="cep">CEP</label>
		                <input name="cep" type="text" id="cep" class="form-control" placeholder="Informe o CEP" id="cep">
					</div>

					<div class="form-group col-sm-6">
		                <label for="endereco">Endereço</label>
		                <input name="endereco" type="text" id="endereco" placeholder="Infome o endereço" class="form-control">
	                </div>

	                <div class="form-group col-sm-4">
		                <label for="endNumero">Número</label>
		                <input name="endNumero" type="text" id="endNumero" placeholder="Número" class="form-control" >
	             	</div>
					
					<div class="form-group col-sm-12">
		                <label for="endcomp">Complemento</label>
		                <input name="endComp" type="text" id="endComp" placeholder="Complemento" class="form-control">
	                </div>

					<div class="form-group col-sm-6">
		                <label for="bairro">Bairro</label>
		                <input name="Bairro" type="text" id="bairro" placeholder="Informe o bairro" class="form-control">
	                </div>

	                <div class="form-group col-sm-6">
		                <label for="cidade">Cidade</label>
		                <input name="cidade" type="text" id="cidade" placeholder="Informe a cidade" class="form-control">
					</div>

					<br/>

					<div class="form-group col-sm-6">
	                <label for="estado">Estado</label>
		                <select name="estado" id="estado" class="custom-select mr-sm-2">
		                    <option>Selecione o estado</option>
		                    <option value="AC">Acre</option>
		                    <option value="AL">Alagoas</option>
		                    <option value="AP">Amapá</option>
		                    <option value="AM">Amazonas</option>
		                    <option value="BA">Bahia</option>
		                    <option value="CE">Ceará</option>
		                    <option value="DF">Distrito Federal</option>
		                    <option value="ES">Espirito Santo</option>
		                    <option value="GO">Goiás</option>
		                    <option value="MA">Maranhão</option>
		                    <option value="MS">Mato Grosso do Sul</option>
		                    <option value="MT">Mato Grosso</option>
		                    <option value="MG">Minas Gerais</option>
		                    <option value="PA">Pará</option>
		                    <option value="PB">Paraíba</option>
		                    <option value="PR">Paraná</option>
		                    <option value="PE">Pernambuco</option>
		                    <option value="PI">Piauí</option>
		                    <option value="RJ">Rio de Janeiro</option>
		                    <option value="RN">Rio Grande do Norte</option>
		                    <option value="RS">Rio Grande do Sul</option>
		                    <option value="RO">Rondônia</option>
		                    <option value="RR">Roraima</option>
		                    <option value="SC">Santa Catarina</option>
		                    <option value="SP">São Paulo</option>
		                    <option value="SE">Sergipe</option>
		                    <option value="TO">Tocantins</option>
		                </select>
	            	</div>

	              	
	                <input type="submit" class="btn btn-primary btn-block" value="CADASTRAR">
	            	
	            </form>
	        </div>

	        <?php
				if( isset($_POST['crm']) && !is_numeric($_POST['crm'])){
					echo "<script language=javascript>alert( 'Preencha o campo CRM corretamente!' );</script>";
				}
				else if( isset($_POST['nome']) && empty($_POST['nome'])){
					echo "<script language=javascript>alert( 'Preencha o campo Nome corretamente!' );</script>";
				}
				else if( isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
					echo "<script language=javascript>alert( 'Email inválido' );</script>";
				}
				else if( isset($_POST['senha']) && strlen($_POST['senha']) <6 ){
					echo "<script language=javascript>alert( 'A senha deve ter no mínimo 6 digitos.' );</script>";
				}
				else if( isset($_POST['fixo']) && strlen($_POST['fixo']) <10 ){
					echo "<script language=javascript>alert( 'Preencha o Telefone no formato de DDD e o número.' );</script>";
				}
				else if( isset($_POST['celular']) && strlen($_POST['celular']) <11 ){
					echo "<script language=javascript>alert( 'Preencha o Celular no formato de DDD e o número.' );</script>";
				}
				else if( isset($_POST['nasc']) && empty($_POST['nasc'])){
					echo "<script language=javascript>alert( 'Forneça a Data de Nascimento.' );</script>";
				}
				else if( !isset($_POST['sexo'])){
					echo "<script language=javascript>alert( 'Selecione o sexo.' );</script>";
				}
				if ( isset($_POST['cep']) && !preg_match('/[0-9]{5,5}([-]?[0-9]{3})?$/', $_POST['cep'])){
				    echo "<script language=javascript>alert( 'CEP inválido.' );</script>";
				}
				else if( isset($_POST['endereco']) && empty($_POST['endereco'])){
					echo "<script language=javascript>alert( 'Preencha o campo Endereço.' );</script>";
				}
				else if( isset($_POST['endNumero']) && !is_numeric($_POST['endNumero'])){
					echo "<script language=javascript>alert( 'Preencha o Número do endereço.' );</script>";
				}
				else if( isset($_POST['bairro']) && empty($_POST['bairro'])){
					echo "<script language=javascript>alert( 'Preencha o campo Bairro.' );</script>";
				}
				else if( isset($_POST['cidade']) && empty($_POST['cidade'])){
					echo "<script language=javascript>alert( 'Preencha o campo Cidade.' );</script>";
				}
				else if( !isset($_POST['estado'])){
					echo "<script language=javascript>alert( 'Selecione o Estado.' );</script>";
				}
	
								


			?>

	<div class="footer" align="right">Sistema de Integração de Processos Clínicos Cirúrgicos - Sfactory&reg</div>
	
	<!--Bootstrap JS-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>