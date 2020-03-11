<?php
$id_boletim =  $_POST['id_boletim'];
$tratamento = $_POST['tratamento'];
$sql = "UPDATE atendimento SET tratamento = '$tratamento' WHERE boletim_id_boletim = $id_boletim";
include('conexao.php');
echo $sql;
mysqli_query($conexao,$sql);
mysqli_close($conexao);
echo "<script>alert('Tratamento altarado com sucesso!'); window.location='painel.php';</script>";
?>