<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de dados</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

include ('../../conexao.php');

$id_funcionario = $_POST['id_funcionario'];

echo $id_funcionario;

//$delete_pes = "delete * from funcionario where id_funcionario = ".$id_funcionario"
$delete_fun = "delete from funcionario where id_funcionario = ".$id_funcionario;
mysqli_query($conexao,$delete_fun);// or die("Erro ao tentar cadastrar registro");

//$select = "select max(id_pessoa) id_pessoa from pessoa";
//$return = mysqli_query($conexao,$select) or die("Erro ao tentar cadastrar registro");
//while ($row = mysqli_fetch_assoc($return)) {
//	$pessoa_id_pessoa = $row['id_pessoa'];
//}

//$sqlu = "INSERT INTO paciente (pessoa_id_pessoa,responsavel_id_responsavel) VALUES ('$pessoa_id_pessoa','$responsavel')";
//mysqli_query($conexao,$sqlu) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "<script>alert('Exclusão efetuada com sucesso!'); window.location='../../painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>
</body>
</html>
