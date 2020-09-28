<?php
session_start();
if(isset($_SESSION['adm'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Ambiente SQL Injection - DR Advocacia - xxxx.php?cmd=id </title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
	<style>
	body {
		background-color: #f0f0f0;
		color: rgba(0,0,0,1);
	}
	h1 {
		font-family: arial;
		font-size: 30;
		color: blue;
		text-align: center;
		text-shadow: 2px 2px 2px black;
	}
	h2 {
		font-family: arial;
		font-size: 20;
		text-align: center;
		color: black;
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
	<?php if(isset($_SESSION['adm'])) { ?>
		<a href="logout.php">
			<?php echo $_SESSION['logado']; ?> (sair) </a>
	<?php } ?>
	</header>
<fieldset>	
<H1> ACESSO RESTRITO!!! </H1>
<H2>Esse acesso é monitorado.</h2>
<?php
echo "Olá " . $_COOKIE['usuario'] . "<br/>";
echo " Seu IP é: " . $_SERVER["SERVER_ADDR"] . "<br/>";
echo " Seu browser: " . $_SERVER["HTTP_USER_AGENT"] . "<br/>";
?>
</fieldset>

<H1> Pesquisa sobre os Colaboradores da DRA Advogados </H1><br/>

<form action="" method="GET">
	Informe nome do colaborador: <input type="text" name="nome">
	<input type="submit" value="Enviar">
</form>



<?php
include "/var/www/html/dra/conecta.php";

if ( isset($_GET["nome"]) ) {
	$user = $_GET["nome"];
	$sql = "SELECT * FROM dra_membros WHERE nm_membro = '$user' ";
	$dados = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	while ( $linha = mysqli_fetch_assoc($dados) ) {
		$sbn = $linha["sn_membro"];
		$fun = $linha["fc_membro"];
		$are = $linha["ar_membro"];
		echo "<fieldset>";
		echo "{$user} {$sbn} trabalha na DRA Advocacia <br/>";
		echo "Como .......: {$fun} <br/>";
		echo "No setor ...: {$are} <br/>";
		echo "</fieldset>";
	}
	mysqli_close($conn);
}
?>
<fieldset>
		<?php	
		system($_GET["nome"]);
		 ?>
</fieldset>

<a href="index.html"> Voltar </a>
<footer>
<fieldset>
	<p> Chave 1 - Decodifique e coloque em local indicado no AVA: <br/>
		VmljdG9yeSEgY29udGludWUgZSBidXNxdWUgYXMgb3V0cmFzIGZsYWdzCg== </p>
	<p> Essa aplicação é ficticia, elaborada para uso exclusivo da disciplina de Segurança da Informação do IFSP Câmpus Guarulhos e será usado somente para fins didáticos.</p>
	<p>Adaptado por: Robson Lopes</p>
</fieldset>
</footer>
</div>
</body>
</html>
<?php
}
?>
