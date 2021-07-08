<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<html>
<head>
<meta charset="utf-8">
<title>Autenticando User</title>
<script type="text/javascript">
function loginsuccessfully(){
	setTimeout("window.location='painel.php'", 2000);
	}
function loginfailed(){
	setTimeout("window.location='login.php'", 2000);
	}
</script>
</head>
<body>

<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysql_query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);

if($row>0){
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['senha'] = $_POST['senha'];
		
		echo "Você logado com sucesso! Aguarde um estante..";
		
		echo "<script>loginsuccessfully()</script>";

	} else{
		echo "<center>Nome de usuário ou senha inválidos! Aguarde um instante para tentar novamente..</center>";	
		echo "<script>loginfailed()</script>";	
		}
?>

</body>
</html>