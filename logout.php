<?php
	session_start();
    
    unset($_SESSION['adm']);
    unset($_SESSION['users']);
    unset($_SESSION['logado']);
        
	header("location:acesso.php");
?>

