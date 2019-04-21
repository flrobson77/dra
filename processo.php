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
</header>
<section>
	<figure class="foto-legenda">
		<img src="imagens/direito003.jpg"/>
		<figcaption>
		Fonte:Google_fotos
		</figcaption>
	</figure>

	<form method="post" id="fcontato" action="valida_processo.php" enctype="multipart/form-data">
	<fieldset id="cliente"><legend>Dados do Cliente</legend>
        <p><label for="ccli"> Cliente:</label>
            <select id="cadv" name="advo" placeholder="Informe cliente">
                <option> Renato </option>
                <option> Felipe </option>
            </select>
        </p>
    </fieldset>
	<fieldset id="historia"><legend>Caso</legend>
		<p><label for="cqtao"> Questão ou Problema?</label><br/>
		<input type="text" name="qtao" id="cqtao" size="60" maxlength="60" placeholder="Exemplo: Comprei um móvel e a empresa não entregou"/></p>
		<p><label for="cres">Resumo:</label><br/>
		<textarea name="txtres" id="cresumo" cols="60" rows="5" placeholder="Escreva aqui um resumo sobre seu caso">
		</textarea>
		</p>
	</fieldset>
	<fieldset id="agenda"><legend> Atendimento </legend>
        <p><label for="cadv"> Nome:</label>
        <select id="cadv" name="advo" placeholder="Indique o advogado">
            <option> Daniel </option>
            <option> Ricardo </option>
        </select>
        <p><label for="cdate"> Escolha o dia da visita:</label>
        <input type="date" name="txtdate" id="cdate"/></p>
        <p><label for="selhoras"> Selecione horário:</label>
		<select id="choras" name="selhoras" placeholder="Escolha horário">
			<option> 09:00 </option>
			<option> 09:30 </option>
			<option> 10:00 </option>
			<option> 10:30 </option>
			<option> 11:00 </option>
			<option> 11:30 </option>
			<option> 14:00 </option>
			<option> 14:30 </option>
			<option> 15:00 </option>
			<option> 15:30 </option>
			<option> 16:00 </option>
			<option> 16:30 </option>
		</select>
	</fieldset>
	<fieldset id="processo"><legend>Submissão</legend>
		<p><label for="carqv"> Arquivo:</label><br/>
		<input type="file" name="arqv" id="carqv" placeholder="Encaminhe seu documentos"/></p>
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