<?php

//session_start();
$id_exame = $_POST['id_exame'];
//$id_funcionario = $_SESSION['id_funcionario'];
//echo $id_exame;

include ('conexao.php');
$sql = "UPDATE atendimento_has_exame SET status = 'FINALIZADO' WHERE exame_id_exame = $id_exame";
//$sql_atendimento = "insert into atendimento (data_hora_internacao, boletim_id_boletim) values (".date('Y/m/d').",".$paciente.")";
mysqli_query($conexao,$sql);
//mysqli_query($conexao,$sql_atendimento);
mysqli_close($conexao);
echo "<script>alert(Exame concluído); window.location='painel.php';</script>";
?>