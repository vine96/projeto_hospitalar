<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	include ('../../conexao.php');
$peso = $_POST['peso'];
$temperatura = $_POST['temperatura'];
$frequencia_cardiaca = $_POST['frequencia_cardiaca'];
$dor = $_POST['dor'];
$sinais_vitais = $_POST['sinais_vitais'];
$hipotese = $_POST['hipotese'];
$paciente = $_POST['paciente'];
$prioridade = $_POST['prioridade'];
$sql = "INSERT INTO boletim (peso, temperatura,frequencia_cardiaca,sinais_dor,sinais_vitais,hipotese,paciente_id_paciente,prioridade_id_prioridade) VALUES ('$peso','$temperatura','$frequencia_cardiaca','$dor','$sinais_vitais','$hipotese','$paciente','$prioridade')";
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
?>
</body>
</html>
