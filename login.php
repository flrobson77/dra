<?php
include "/var/www/html/dra/conecta.php";

$users = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM dra_users WHERE nm_users = '$users' AND pw_users = '$password';";

//$query = mysqli_query($conn, $sql);
$dados = mysqli_query($conn, $sql) or die(mysqli_error($conn));

while ( $linha = mysqli_fetch_assoc($dados) ) {
	$nm = $linha["nm_users"];
	$tp = $linha["tp_users"];
}

if (mysqli_num_rows($dados)==1 && $tp =='SAD')
{
	session_start();
	$_SESSION['adm'] = true;
	$_SESSION['logado'] = $nm;
	setcookie("usuario", $nm, time()+60+60*2);
	header("location:admin.php");
}
elseif (mysqli_num_rows($dados)==1 && $tp =='COM')
{
	session_start();
	$_SESSION['comum'] = true;
	$_SESSION['logado'] = $nm;
	setcookie("usuario", $nm, time()+60+60*2);
	header("location:admscr.php");
}
else
{
	header("location:acesso.php?erro");
}
?>

