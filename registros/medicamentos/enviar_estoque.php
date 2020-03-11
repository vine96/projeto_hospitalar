<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

include('../../conexao.php');
$aux = 0;
$quantidade = $_POST['quantidade'];
$id_remedio = $_POST['remedio'];
$sql_estoque = "select quantidade from estoque where remedio_id_remedio = ".$id_remedio;
$estoque_atual = mysqli_query($conexao,$sql_estoque);
while($estoque = mysqli_fetch_assoc($estoque_atual)){
	$aux = $estoque['quantidade'];
}

$nova_quantidade = $aux + ((int)$quantidade);
echo $nova_quantidade;
$sql = "update estoque set quantidade = ".$nova_quantidade." where remedio_id_remedio = ".$id_remedio;
echo $sql;
mysqli_query($conexao,$sql);
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>
</body>
</html>
