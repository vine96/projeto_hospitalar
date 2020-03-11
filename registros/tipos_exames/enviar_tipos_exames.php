<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

include('../../conexao.php');

$descricao = $_POST['tipoExame'];

$sql = "INSERT INTO tipo_exame (descricao) VALUES ('$descricao')";
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>
</body>
</html>
