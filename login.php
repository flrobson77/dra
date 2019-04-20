<?php
include "/var/www/html/sysadmin/dra/conecta.php";

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
?>

