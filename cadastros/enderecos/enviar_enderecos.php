<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
include ('../../conexao.php');

$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$rua = $_POST['rua'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$squ = "INSERT INTO endereco (cep, bairro, numero, rua, complemento, cidade, estado) VALUES ('$cep', '$bairro', '$numero', '$rua', '$complemento', '$cidade', '$estado')";
mysqli_query($conexao,$squ) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>
</body>
</html>


Textos completos	
ID_ENDERECO
CEP
BAIRRO
NUMERO
RUA
CIDADE_ID_CIDADE
COMPLEMENTO