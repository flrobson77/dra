<?php
include "/var/www/html/dra/conecta.php";

$users = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM dra_users WHERE nm_users = '$users' AND pw_users = '$password';";

$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query)==1)
{
	header("location:admin.php");
}
else
{
	echo "Usuario $users ou senha não válidos";
}
?>

