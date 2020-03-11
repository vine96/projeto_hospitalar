<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

include('../../conexao.php');

$fabricante = $_POST['fabricante'];
$serie = $_POST['serie'];
$validade = $_POST['validade'];
$fabricacao = $_POST['fabricacao'];
$contra_indicacao = $_POST['contra_indicacao'];
$nome = $_POST['nome_medicamento'];
$posologia = $_POST['posologia'];

$sql = "INSERT INTO remedio (fabricante, serie, data_validade, data_fabricacao, contraindicacao, nome, posologia) VALUES ('$fabricante', '$serie', '$validade', '$fabricacao', '$contra_indicacao', '$nome', '$posologia')";
mysqli_query($conexao,$sql);
$select = "select max(id_remedio) id_remedio from remedio";
$ret = mysqli_query($conexao,$select);
while($linha = mysqli_fetch_assoc($ret)){
	$sqld = "insert into estoque (remedio_id_remedio) values (".$linha['id_remedio'].")";
	mysqli_query($conexao,$sqld);
}


mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>
</body>
</html>
