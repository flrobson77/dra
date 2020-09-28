<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>	DR Advogados - Dúvidas? </title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
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
	<li><a href="index.html">Home</a></li>
	<li><a href="quemsomos.html">Quem Somos</a></li>
	<li><a href="services.html">Serviços</a></li>
	<li><a href="faleconosco.php">Fale Conosco</a></li>
	</ul>
	</nav>
	<h3><a href="index.html">Home</a>&nbsp>&nbsp Serviços</h3>
</header>
        <hr>
        <fieldset>
            
            <form action="" method="GET">
                Mande sua dúvida ou questão para nós: <input type="text" name="consulta">
                <input type="submit" value="Enviar">
            </form>
        </fieldset>
        <hr>
        <br>
            <?php
                session_start();
                if (isset($_GET["consulta"])) 
                    echo "Você buscou por: $_GET[consulta] <br>";
            ?>
        <br>
        <a href="index.html"> Voltar </a>
        <br>
        <hr>
    <footer id="rodape">
        <fieldset>
        <h2> Exemplo de aplicação XSS <br/> </h2>
        <p>
            O XSS refletido se caracteriza pelo fato de explorar a vulnerabilidade de XSS no lado do cliente.<br>
            Está pagina foi elaborada esclusivamente para a disciplina de segurança da informação no IFSP Câmpus Guarulhos<br>
        </p>
        <p> Copyright&copy 2018 by SecurityLabs (Prof. Robson) </p>
        </fieldset>
    </footer>
    </div>
</html>
