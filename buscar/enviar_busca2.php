<?php
//session_start();
$cpf = $_POST['cpf'];
//$id_funcionario = $_SESSION['id_funcionario'];
//echo $id_exame;
echo $cpf;
include ('../conexao.php');
$sql = "select paciente.id_paciente,pessoa.nome,pessoa.cpf,pessoa.rg,pessoa.estado_civil,pessoa.sexo,pessoa.data_nascimento,p2.nome responsavel from pessoa join paciente on pessoa.id_pessoa = paciente.pessoa_id_pessoa join responsavel on responsavel.id_responsavel = paciente.responsavel_id_responsavel join pessoa p2 on p2.id_pessoa = responsavel.pessoa_id_pessoa where pessoa.cpf = '".$cpf."'";
//$sql_atendimento = "insert into atendimento (data_hora_internacao, boletim_id_boletim) values (".date('Y/m/d').",".$paciente.")";



$re = mysqli_query($conexao,$sql);

while($line = mysqli_fetch_assoc($re)){
	echo "<br>Nome: ".$line['nome'];
	echo "<br>CPF: ".$line['cpf'];
	echo "<br>RG: ".$line['rg'];
	echo "<br>Estado Civil: ".$line['estado_civil'];
	echo "<br>Sexo: ".$line['sexo'];
	echo "<br>Data Nascimento: ".$line['data_nascimento'];
	echo "<br>Responsável: ".$line['responsavel'];
	$id_paciente = $line["id_paciente"];
	$sqlBol = "select atendimento.id_atendimento,peso,temperatura,frequencia_cardiaca,sinais_dor,motivo,sinais_vitais,hipotese,atendimento.hospital,atendimento.alta,atendimento.obito, pessoa.nome medico from boletim join prioridade on prioridade.id_prioridade = boletim.prioridade_id_prioridade join funcionario on id_medico = id_funcionario join pessoa on funcionario.pessoa_id_pessoa = pessoa.id_pessoa join atendimento on atendimento.boletim_id_boletim = boletim.id_boletim where paciente_id_paciente = ".$id_paciente;
echo "<br><br>BOLETINS:<br>";
	$r = mysqli_query($conexao,$sqlBol);
	while($li = mysqli_fetch_assoc($r)){
		if($li['hospital'] <> 1){$hospital = "Não";}else{$hospital = "Sim";}
		if($li['obito'] <> 1){$obito = "Não";}else{$obito = "Sim";}
		if($li['alta'] <> 1){$alta = "Não";}else{$alta = "Sim";}

		
		echo "Peso: ".$li['peso'];
		echo "<br>Frequancia Cardiaca: ".$li['frequencia_cardiaca'];
		echo "<br>Dor: ".$li['sinais_dor'];
		echo "<br>Motivo: ".$li['motivo'];
		echo "<br>Pressão: ".$li['sinais_vitais'];
		echo "<br>Hipotese: ".$li['hipotese'];
		echo "<br>Hospital: ".$hospital;
		echo "<br>Alta: ".$alta;
		echo "<br>Óbito: ".$obito."<br>";

			echo "<br><br>EXAMES:";
		$sql_exame = "select a.status,pessoa.nome tecnico,exame.descricao_exame,tipo_exame.descricao from atendimento_has_exame a left join funcionario on id_funcionario = id_tecnico left join pessoa on funcionario.pessoa_id_pessoa = pessoa.id_pessoa left join exame on exame.id_exame = a.exame_id_exame left join tipo_exame on id_tipo_exame = id_tipo where a.atendimento_id_atendimento = ".$li['id_atendimento'];
		$res = mysqli_query($conexao,$sql_exame);
		while($l = mysqli_fetch_assoc($res)) {
			echo "<br>Técnico: ".$l['tecnico'];
			echo "<br>Status: ".$l['status'];
			echo "<br>Descricao Exame :".$l['descricao_exame'];
			echo "<br>Exame:".$l['descricao']."<br>";

		}

	}
	mysqli_close($conexao);
//echo "<script>alert(Exame concluído); window.location='painel.php';</script>";

}
//mysqli_query($conexao,$sql_atendimento);

?>
<button onclick="window.location.href='../painel.php'">Voltar</button>