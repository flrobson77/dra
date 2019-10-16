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
                </header>
    <section>
    <figure class="foto-legenda">
        <img src="imagens/direito004.jpg"/>
        <figcaption>
           Fonte:Google_fotos
        </figcaption>
    </figure>

 <?php
 echo "Funcionalidade não implementada..."
 /*       include "/var/www/html/sysadmin/dra/conecta.php";
    
        $nom = $_POST['nome'];
        $sno = $_POST['snom'];
        $eml = $_POST['mail'];
        $tel = $_POST['tele'];
        $rge = $_POST['rger'];
        $cpf = $_POST['dcpf'];

        $sql = "INSERT INTO dra_cliente VALUES ('$nom','$sno','$eml','$tel','$rge','$cpf')";
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($res){
            setcookie(cliente, $cpf, time()+60+60*24);
	        header("location:resposta_cliente.php");
        }
        else {
            echo "<p>";
            echo "<H1> ERRO! </H1><br/>";
		    echo "$nom Não foi Cadastrado<br/>";
        }
    */
    ?>
</section>
<a href="index.html"> Voltar </a>
<footer id="rodape">
<fieldset>
    <p> Este serviço é fictício, elaborado para uso exclusivo na disciplina de segurança da informação no IFSP Câmpus Guarulhos e será usado somente para fins didáticos</p>
    <p>	Copyright&copy 2017 by Robson Lopes</p>	
    <p><a href="http://www.facebook.com" target="_blank"><img src="imagens/fbklogo.jpg"/></a>
    <a href="http://www.twitter.com" target="_blank"><img src="imagens/twrlogo.jpg"/></a>
    </p>
</fieldset>
</div>
</body>
</html>
