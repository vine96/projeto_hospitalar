<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
include ('../../conexao.php');

$descricao = $_POST['descricao'];
$permissao = $_POST['permissao'];


$sq = "INSERT INTO cargo (descricao, permissao) VALUES ('$descricao', '$permissao')";
mysqli_query($conexao,$sq) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>
</body>
</html>
