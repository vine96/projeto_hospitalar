<?php
$id_atendimento =  $_POST['id_atendimento'];
$sql = "update atendimento set hospital = 1 where id_atendimento = ".$id_atendimento;
include('conexao.php');
mysqli_query($conexao,$sql);
mysqli_close($conexao);
//echo "<script>alert('Paciente encaminhado para hospital!'); window.location='painel.php';</script>";
echo "<a href='painel.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>