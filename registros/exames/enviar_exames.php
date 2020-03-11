<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	
$descricao = $_POST['descricaoExame'];

$user = "root";
$host = 'localhost';
$dbname = "miojo";
$password = '';
$conexao = mysqli_connect($host, $user, $password, $dbname) or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO exame (descricao) VALUES ('$descricao')";
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
?>
</body>
</html>
