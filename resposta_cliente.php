<html>
<head>
        <meta charset="utf-8">
        <title>	DR Advogados - Cliente </title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
        <link rel="stylesheet" type="text/css" href="css/forms.css"/>
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
	        <ul type="disc">
	                <li><a href="index.html">Home</a></li>
	                <li><a href="cliente.php">Cliente</a></li>
                </ul>
	        </nav>
        </header>
        <section>

        <?php
        include "/var/www/html/sysadmin/dra/conecta.php";

        $cpf=$_COOKIE['cliente'];

        $sql = "SELECT * FROM dra_cliente WHERE cp_cliente='$cpf';";

        $dados = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        echo "<H1>Cliente Cadastrado: </H1>";
        echo "<p>";
        if ($dados) {
                while ( $linha = mysqli_fetch_assoc($dados) ) {
                        $nm = $linha["nm_cliente"];
                        $sn = $linha["sn_cliente"];
                        $em = $linha["em_cliente"];
                        $te = $linha["te_cliente"];
                        echo "$nm $sn : $em : $te <br/>";
                }
        }
        else {
                echo "<H1> ERRO! </H1><br/>";
                echo "$nom Não foi Cadastrado<br/>";
        }
        echo "</p>";
        ?>
        </section>

        <footer id="rodape">
        <fieldset>
                <p> Este serviço é fictício, elaborado para uso exclusivo na disciplina de segurança da informação no IFSP Câmpus Guarulhos e será usado somente para fins didáticos</p>
                <p> Copyright&copy 2017 by Robson Lopes</p>	
                <p><a href="http://www.facebook.com" target="_blank"><img src="imagens/fbklogo.jpg"/></a>
                <a href="http://www.twitter.com" target="_blank"><img src="imagens/twrlogo.jpg"/></a>
                </p>
        </fieldset>
        </footer>
</div>
</body>
</html>