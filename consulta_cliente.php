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

<?php
include "/var/www/html/sysadmin/dra/conecta.php";
$cpf=$_COOKIE['cliente'];
$sql = "SELECT * FROM dra_cliente ORDER BY nm_cliente;";// WHERE cp_cliente='$cpf';";
echo $sql;

$dados = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$cont=1;
$rows=mysqli_num_rows($dados);
echo "<H1>Clientes Cadastrados: </H1><br/>";
if ($dados) {
while ( $cont <= $rows ) {
        $linha = mysqli_fetch_assoc($dados);
        $nm = $linha["nm_cliente"];
        $em = $linha["em_cliente"];
        echo "$nm:$em <br/>";
        $cont++;
	    }
}
else {
		echo "Não foi...";
	}

/*
//if (mysqli_num_rows($dados)==1 && $tp =='SAD')
{
	setcookie("usuario", $nm, time()+60+60*24);
	header("location:admin.php");
}
elseif (mysqli_num_rows($dados)==1 && $tp =='COM')
{
	setcookie("usuario", $nm, time()+60+60*24);
	header("location:admscr.php");
}
else
{
	echo "Usuario $users ou senha não válidos";
}
*/

?>
</section>
<a href="cliente.php"> Cliente </a>
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