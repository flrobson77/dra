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