<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>	DR Advogados - Fale Conosco </title>
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
	<h1>Menu Principal</h1>
	<ul type="disc">
	<li><a href="index.html">Home</a></li>
	<li><a href="quemsomos.html">Quem Somos</a></li>
	<li><a href="services.html">Serviços</a></li>
	<li><a href="fale_conosco.html">Fale Conosco</a></li>
	</ul>
	</nav>
	<h3><a href="index.html">Home</a>&nbsp>&nbsp Fale Conosco</h3>
</header>
	
	<h2> Fale Conosco </h2>
	<figure class="foto-legenda">
		<img src="imagens/direito004.jpg"/>
		<figcaption>
		Fonte:Google_fotos
		</figcaption>
	</figure>
	<section>
	
	<p>
	<table id="tblocal">
	<caption>Informações de localização do nosso escritório:</caption>
	<tr><td class="ce">Telefone:</td><td class="cd">(00)12345678</td></tr>
	<tr><td class="ce">E-mail:</td><td class="cd">contatos@dradvogados.com.br</td></tr>
	<tr><td class="ce">Endereço:</td><td class="cd"> Praça Oito de Dezembro, nº100, Taboão, Guarulhos </td></tr>
	<tr><td class="ce" rowspan="2">Funcionamento:</td><td class="cd">Segunda a Sexta das 8h às 12h</td></tr>
	<tr><td class="cd">Sábado das 9 às 12h </td></tr>
	<tr><td class="cd" colspan="2"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5328.907631610309!2d-46.50385544846215!3d-23.43028841443163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce8ad9521f1b17%3A0x2a5ec277abcd3742!2sPra%C3%A7a+Oito+de+Dezembro!5e0!3m2!1spt-BR!2sbr!4v1499926785932" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></td>
	</tr>
	</table>
	</p>
	
	<p> Envie seu caso, para isso é só preencher o formulário a seguir, agendar sua visita. você receberá em seu e-mail e em seu Whatsapp&reg uma mensagem de confirmação.</p>
	
	<form method="post" id="fcontato" action="faq.php">
	<fieldset id="cliente"><legend>Dados de contato:</legend>
		<p><label for="cnome"> Nome:</label><br>
		<input type="text" name="txtnome" id="cnome" size="60" maxlength="50" placeholder="Nome completo"/></p>
		<p><label for="cmail">E-mail:</label><br>
		<input type="text" name="txtmail" id="cmail" size="60" maxlength="50" placeholder="E-mail"/></p>
		<fieldset id="cont"><legend> Contatos: </legend>
			<p><label for="ccel">Celular:</label></h4></td>
			<input type="text" name="txtcel" id="ccel" size="20" maxlength="13" placeholder="(00)XXXXXXXXX"/></p>
		</fieldset>
	</fieldset>
	<fieldset id="historia"><legend>Caso</legend>
		<p><label for="cquestao"> Envie sua questão ou Problema?</label><br>
		<input type="text" name="txtquestao" id="cquestao" size="60" maxlength="60" placeholder="Exemplo: Comprei um móvel e a empresa não entregou"/></p>
		<p><label for="cresumo">Resumo:</label><br>
		<textarea name="txtresumo" id="cresumo" cols="60" rows="5" placeholder="Escreva aqui um resumo sobre seu caso">
		</textarea>
		</p>
	</fieldset>
	<p>
	<input type="submit" name="cbenviar" value="Enviar">
	<input type="reset" name="cblimpar" value="Limpar">
	</p>
	</form>
	</section>
	<footer id="rodape">
	<p> Este serviço é fictício, elaborado para uso exclusivo na disciplina de segurança da informação no IFSP Câmpus Guarulhos e será usado somente para fins didáticos</p>
	<p>	Copyright&copy 2017 by Robson Lopes</p>	
	<p><a href="http://www.facebook.com" target="_blank"><img src="imagens/fbklogo.jpg"/></a>
	<a href="http://www.twitter.com" target="_blank"><img src="imagens/twrlogo.jpg"/></a>
	</p>
	</footer>
</div>	
</body>
</html>