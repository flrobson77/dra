<!DOCTYPE html>
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
	            <li><a href="admscr.php">Voltar</a></li>
	        </ul>
	    </nav>
    </header>
    <section>
        <figure class="foto-legenda">
            <img src="imagens/direito004.jpg"/>
            <figcaption>
                Fonte:Google_fotos
            </figcaption>
        </figure>

    <form action="valida_cliente.php" method="POST">
    <fieldset id="cliente">
        <legend>Identificação do Cliente</legend>
        <p><label for="cnome"> Nome:</label>
        <input type="text" name="nome" size="50" maxlength="20" placeholder="Insira primeiro nome"></p>
        <p><label for="csnom"> Sobrenome:</label>
        <input type="text" name="snom" size="50" maxlength="30" placeholder="Insira o sobrenome"></p>
        <p><label for="cmail">E-mail:</label>
        <input type="email"name="mail" size="50" maxlength="50" placeholder="insira o e-mail"></p>
        <p><label for="ctel">Telefone:</label>
		<input type="text" name="tele" id="ctel" size="20" maxlength="13" placeholder="(00)XXXXXXXXX"/></p>
        <p><label for="crge">RG:</label>
        <input type="text" name="rger" size="20" maxlength="12" placeholder="Sem pontos e hífen"></p>
        <p><label for="ccpf">CPF:</label>
        <input type="text" name="dcpf" size="20" maxlength="11" placeholder="Sem pontos e hífen"></p>
        <input type="submit" name="cbenviar" value="Enviar">
	    <input type="reset" name="cblimpar" value="Limpar">
    </fieldset>
    </form>
    </section>
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

