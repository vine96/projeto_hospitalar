<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$estadoCivil = $_POST['estadoCivil'];
$sexo = $_POST['sexo'];

$user = "root";
$host = 'localhost';
$dbname = "miojo";
$password = '';
$conexao = mysqli_connect($host, $user, $password, $dbname) or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO pessoa (nome, data_nascimento, cpf, rg, estado_civil, sexo) VALUES ('$nome', '$nascimento', '$cpf', '$rg', '$estadoCivil', '$sexo')";
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>
</body>
</html>
