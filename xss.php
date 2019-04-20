<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Curso de PHP </title>
    <link rel="stylesheet" type="text/css" href="http://192.168.16.248/sysadmin/seguranca/_css/estilos.css"/>
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <h1> USERBUS S/A <br/></h1>
        
        <p>
            Viagens inteligentes
        </p>
        <br>
        </header>
        <hr>
        <fieldset>
            
            <form action="" method="GET">
                Informe seu destino: <input type="text" name="rota">
                <input type="submit" value="Enviar">
            </form>
        </fieldset>
        <hr>
        <br>
            <?php
                session_start();
                if (isset($_GET["rota"])) 
                    echo "Você buscou por: $_GET[rota] <br>";
            ?>
        <br>
        <a href="http://192.168.25.248/sysadmin/seguranca/xss.php"> Voltar </a>
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
