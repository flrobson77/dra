<?php
session_start();
if(isset($_SESSION['comum'])){
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css" />
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
	    <nav id="menu">
	    <h1>Menu Principal</h1>
	    <ul type="disc">
		<li><a href="cliente.php">Novos Clientes</a></li>
		<li><a href="consulta_cliente.php">Busca por Clientes</a></li>
		<li>
            	<?php if(isset($_SESSION['comum'])) { ?>
		<a href="logout.php"> <?php echo $_SESSION['logado'];?> (sair) </a><?php } ?></li>
	    </ul>
	    </nav>
        </header>

    <section>
        <h1>Página da Secretaria</h1>
        <fieldset>	
                <H1> ACESSO RESTRITO!!! </H1>
                <H2>Esse acesso é monitorado.</h2>
                <?php
                echo "Olá " . $_COOKIE['usuario'] . "<br/>";
                echo " Seu IP é: " . $_SERVER["SERVER_ADDR"] . "<br/>";
                echo " Seu browser: " . $_SERVER["HTTP_USER_AGENT"] . "<br/>";
                ?>
                </fieldset>

        <a href="index.html"> Voltar </a>
    </section>

    <footer>
        <fieldset>
        <p> Essa aplicação é ficticia, elaborada para uso exclusivo da disciplina de Segurança da Informação do IFSP Câmpus Guarulhos
            e será usado somente para fins didáticos.</p>
        <p>Adaptado por: Robson Lopes</p>
        </fieldset>
    </footer>
    </div>
</body>
</html>
<?php
}
?>
