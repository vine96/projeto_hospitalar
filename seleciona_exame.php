<?php

session_start();
$id_exame = $_POST['id_exame'];
$id_funcionario = $_SESSION['id_funcionario'];
include ('conexao.php');
$sql = "UPDATE atendimento_has_exame SET id_tecnico = $id_funcionario, status = 'EM ATENDIMENTO' WHERE exame_id_exame = $id_exame";
//$sql_atendimento = "insert into atendimento (data_hora_internacao, boletim_id_boletim) values (".date('Y/m/d').",".$paciente.")";
mysqli_query($conexao,$sql);
//mysqli_query($conexao,$sql_atendimento);
mysqli_close($conexao);
echo "<script>alert('Paciente atribuído a você!'); window.location='painel.php';</script>";
?>