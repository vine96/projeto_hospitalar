<?php

session_start();
$paciente = $_POST['paciente'];
$id_funcionario = $_SESSION['id_funcionario'];
echo $paciente;


include ('conexao.php');


$sql = "UPDATE boletim SET id_medico = $id_funcionario WHERE id_boletim = $paciente";
$sql_atendimento = "insert into atendimento (data_hora_internacao, boletim_id_boletim) values (".date('Y/m/d').",".$paciente.")";
mysqli_query($conexao,$sql);
mysqli_query($conexao,$sql_atendimento);
mysqli_close($conexao);
echo "<script>alert('Cadastro efetuado com sucesso!'); window.location='painel.php';</script>";
?>