<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");		
	} else {
		echo "<center>Você está logado!</center>";
	}
?>

<html>
<head>
<meta charset="utf-8">
<title>Painel</title>
</head>
<body>
<a href="logout.php">Logout</a>
</body>
</html>