<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

include ('../../conexao.php');

$profissao = $_POST['profissao'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$estadoCivil = $_POST['estadoCivil'];
$sexo = $_POST['sexo'];
$responsavel = $_POST['responsavel'];

$id_responsavel = explode(" - ",$responsavel)[0];

$sql = "INSERT INTO pessoa (nome, data_nascimento, cpf, rg, estado_civil, sexo) VALUES ('$nome', '$nascimento', '$cpf', '$rg', '$estadoCivil', '$sexo')";
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");

$select = "select max(id_pessoa) id_pessoa from pessoa";
$return = mysqli_query($conexao,$select) or die("Erro ao tentar cadastrar registro");
while ($row = mysqli_fetch_assoc($return)) {
	$pessoa_id_pessoa = $row['id_pessoa'];
}

$sqlu = "INSERT INTO paciente (pessoa_id_pessoa,responsavel_id_responsavel) VALUES ('$pessoa_id_pessoa','$responsavel')";
mysqli_query($conexao,$sqlu) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>
</body>
</html>
