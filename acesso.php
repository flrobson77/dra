<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> Ambiente SQL Injection - DR Advocacia </title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<style>
	body {
		background-color: #f0f0f0;
		color: rgba(0,0,0,1);
	}
	h1 {
		font-family: arial;
		font-size: 30px;
		color: blue;
		text-align: center;
		text-shadow: 2px 2px 2px black;
	}
	h2 {
		font-family: arial;
		font-size: 20px;
		text-align: center;
		color: black;
	}
	h3 {
		font-family: arial;
		font-size: 10px;
		text-align: center;
		color: black;
	}
	p {
		font-family: arial;
		text-align: left;
		font-size: 20px;
		text-indent: 50px;
	}
	p#pe {
		font-family: arial;
		text-align: justify;
		font-size: 15px;
	}
	fieldset {
		border-color: #cecece;
		margin: 20px;
	}
	legend {
		color: #000000;
		font-family: arial;
		text-align: center;
		font-weight: bold;
		font-size: 15pt;
	}
	form {
		width: 350px;
		margin: auto;
	}
	div#erro {
	width: 600px;
	background-color: #FF5555;
	margin: 0px auto 0px auto;
	padding: 10px;
}
	</style>
</head>
<body>
<div id="interface">
	<header id="cabecalho">
	<figure id="logo">
	<img id="logo" src="imagens/direitologo.jpg"/>
	<figcaption>
		Nós nascemos para lutar por você.
	</figcaption>
	</figure>
	</header>
	
	<h1>Acesso administrativo</h1><br/>
	<h2>ACESSO RESTRITO</h2><br/>
	
	<?php if (isset($_GET['erro'])){ ?>
	<div id="erro">
		<h2> Usuário e/ou senha inválidos </h2> <br/>
	</div>
<?php } ?>
	
<form action="../dra/login.php" method="POST">
<fieldset id="acesso">
	<legend> Acesso administrativo</legend>
	<label for="usu">LOGIN:</label> 
	<input type="text" name="user" maxlength="30" placeholder="Informe usuário"><br/>
	<br/>
	<label for="sen"> SENHA:</label>
	<input type="password" name="pass" maxlength="14" placeholder="Informe senha"><br/>
	<br/>
	<button type="submit"> Entrar </button>
</fieldset>
</form>

<a href="index.html"> Voltar </a>
<footer id="rodape">
<fieldset>
	<p id=pe> Essa aplicação é ficticia, elaborada para uso exclusivo da disciplina de Segurança da Informação do IFSP Câmpus Guarulhos e será usado somente para fins didáticos </p>
	<p id="pe">Elaborado por: Ricardo Longatto</p>
	<p id="pe">Adaptado por: Robson Lopes</p>
</fieldset>
</div>
</body>
</html>
