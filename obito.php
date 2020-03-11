<?php
$id_atendimento =  $_POST['id_atendimento'];
$sql = "update atendimento set obito = '1' where id_atendimento = ".$id_atendimento;

include('conexao.php');
mysqli_query($conexao,$sql);
mysqli_close($conexao);
echo "<script>alert('Paciente declarado como morto.'); window.location='painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>