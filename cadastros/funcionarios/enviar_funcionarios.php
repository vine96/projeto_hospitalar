<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
include ('../../conexao.php');

$login = $_POST['login'];
//$senha = md5(mysqli_real_escape_string($_POST['senha']));
$senha = md5($_POST['senha']);

$email = $_POST['email'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$estadoCivil = $_POST['estadoCivil'];
$sexo = $_POST['sexo'];
$cargo = $_POST['cargo'];
$id_cargo = 0;



if($cargo == 1){
	$id_cargo = 1;
}elseif($cargo == 2){
	$id_cargo = 2;
}elseif($cargo == 5){
	$id_cargo = 5;
}elseif($cargo == 6){
	$id_cargo = 6;
}else{
	$id_cargo = 8;
}

$sql = "INSERT INTO pessoa (nome, data_nascimento, cpf, rg, estado_civil, sexo) VALUES ('$nome', '$nascimento', '$cpf', '$rg', '$estadoCivil', '$sexo')";
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
$select = "select max(id_pessoa) id_pessoa from pessoa";
$return = mysqli_query($conexao,$select) or die("Erro ao tentar cadastrar registro");
while ($row = mysqli_fetch_assoc($return)) {
	$pessoa_id_pessoa = $row['id_pessoa'];
}

$squ = "INSERT INTO funcionario (login, senha, email,pessoa_id_pessoa,cargo_id_cargo) VALUES ('$login', '$senha', '$email',$pessoa_id_pessoa,$id_cargo)";
mysqli_query($conexao, $squ) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='../../painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";

?>
</body>
</html>
