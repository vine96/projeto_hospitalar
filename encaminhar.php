<?php
$id_atendimento =  $_POST['id_atendimento'];
$tipo_exame = $_POST['tipo_exame'];
$descr_exame = $_POST['descr_exame'];
include('conexao.php');
//$sql = "UPDATE atendimento SET tratamento = '$tratamento' WHERE boletim_id_boletim = $id_boletim";
$sql_e = "insert into exame(descricao_exame,id_tipo) values('".$descr_exame."','".$tipo_exame."')";
echo $sql_e;
mysqli_query($conexao,$sql_e);
$sql_select = "select max(id_exame) id_exame from exame";
$retorno_select = mysqli_query($conexao,$sql_select);
while ($row = mysqli_fetch_assoc($retorno_select)) {
$sql_e_a = "insert into atendimento_has_exame(atendimento_id_atendimento,exame_id_exame,status) values($id_atendimento,".$row['id_exame'].",'AGUARDANDO')";
mysqli_query($conexao,$sql_e_a);
}

mysqli_close($conexao);
echo "<script>alert('Encaminhamento realizado com sucesso!'); window.location='painel.php';</script>";
?>