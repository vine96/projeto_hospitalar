<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Miojo de Feijão</title>

<!-- Stylesheets -->
<link type="text/css" href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,500italic,500,300italic,300' rel='stylesheet' type='text/css'>
<link type="text/css" href="icons/font-awesome/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href="icons/rondo/style.css" rel="stylesheet">
<link type="text/css" href="css/theme.css" rel="stylesheet">
</head>

<body>
<header class="header" id="jump">
      
      <div class="collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#jump0" data-toggle="collapse" data-target=".navbar-responsive-collapse">Home</a></li>
          <li><a href="#jump1" data-toggle="collapse" data-target=".navbar-responsive-collapse">Services</a></li>
          <li><a href="#jump2" data-toggle="collapse" data-target=".navbar-responsive-collapse">Portfolio</a></li>
          <li><a href="#jump3" data-toggle="collapse" data-target=".navbar-responsive-collapse">Pricing</a></li>
          <li><a href="#jump4" data-toggle="collapse" data-target=".navbar-responsive-collapse">Team</a></li>
          <li><a href="#jump5" data-toggle="collapse" data-target=".navbar-responsive-collapse">Testimonials</a></li>
          <li><a href="#jump6" data-toggle="collapse" data-target=".navbar-responsive-collapse">Contact</a></li>
        </ul>
      </div>
      <!-- /.navbar-responsive-collapse --> 
    </div>
  </nav>
</header>
<div class="jumper" id="jump0"></div>
<div class="section type-1 big splash">
  <div class="container">
    <div class="splash-block">
      <div class="centered">
        <div class="container">
          <div class="section-headlines">
            <h1>Informações do Paciente</h1>
            <p>Informações Gerais, boletins e exames.</p>
          </div>
          <a href="../painel.php" class="btn btn-outline btn-lg">Nova Pesquisa</a> &nbsp;
           <a href="../painel.php" class="btn btn-outline btn-lg">Voltar</a> &nbsp;

       
          </div>
          <?php
//session_start();
$cpf = $_POST['cpf'];
//$id_funcionario = $_SESSION['id_funcionario'];
//echo $id_exame;
include ('../conexao.php');
$sql = "select paciente.id_paciente,pessoa.nome,pessoa.cpf,pessoa.rg,pessoa.estado_civil,pessoa.sexo,pessoa.data_nascimento,p2.nome responsavel from pessoa join paciente on pessoa.id_pessoa = paciente.pessoa_id_pessoa join responsavel on responsavel.id_responsavel = paciente.responsavel_id_responsavel join pessoa p2 on p2.id_pessoa = responsavel.pessoa_id_pessoa where pessoa.cpf = '".$cpf."'";
//$sql_atendimento = "insert into atendimento (data_hora_internacao, boletim_id_boletim) values (".date('Y/m/d').",".$paciente.")";



$re = mysqli_query($conexao,$sql);


//mysqli_query($conexao,$sql_atendimento);

?>
      </div>
    </div>
  </div>
</div>

<div id="jump6" class="jumper"></div>

<!-- Contact -->
 <div class="section type-1 section-contact">
  <div class="container">
   <?php
while($line = mysqli_fetch_assoc($re)){
echo "<br><br><h4>INFORMAÇÕES PESSOAIS:</h4><br>";
  echo "Nome: </h4>".$line['nome'];
  echo "   | CPF: ".$line['cpf'];
  echo "   | RG: ".$line['rg'];
  echo "   | Estado Civil: ".$line['estado_civil'];
  echo "   | Sexo: ".$line['sexo'];
  echo "   | Data Nascimento: ".$line['data_nascimento'];
  echo "   | Responsável: ".$line['responsavel'];
  $id_paciente = $line["id_paciente"];
  $sqlBol = "select atendimento.id_atendimento,peso,temperatura,frequencia_cardiaca,sinais_dor,motivo,sinais_vitais,hipotese,atendimento.hospital,atendimento.alta,atendimento.obito, pessoa.nome medico from boletim join prioridade on prioridade.id_prioridade = boletim.prioridade_id_prioridade join funcionario on id_medico = id_funcionario join pessoa on funcionario.pessoa_id_pessoa = pessoa.id_pessoa join atendimento on atendimento.boletim_id_boletim = boletim.id_boletim where paciente_id_paciente = ".$id_paciente;
echo "<br><br><h4>BOLETINS:</h4><br>";
  $r = mysqli_query($conexao,$sqlBol);
  while($li = mysqli_fetch_assoc($r)){
    if($li['hospital'] <> 1){$hospital = "Não";}else{$hospital = "Sim";}
    if($li['obito'] <> 1){$obito = "Não";}else{$obito = "Sim";}
    if($li['alta'] <> 1){$alta = "Não";}else{$alta = "Sim";}

    
    echo "Peso: ".$li['peso'];
    echo "   | Frequancia Cardiaca: ".$li['frequencia_cardiaca'];
    echo "   | Dor: ".$li['sinais_dor'];
    echo "   | Motivo: ".$li['motivo'];
    echo "   | Pressão: ".$li['sinais_vitais'];
    echo "   | Hipotese: ".$li['hipotese'];
    echo "   | Hospital: ".$hospital;
    echo "   | Alta: ".$alta;
    echo "   | Óbito: ".$obito;

      echo "<br><br><h4>EXAMES:</h4><br>";
    $sql_exame = "select a.status,pessoa.nome tecnico,exame.descricao_exame,tipo_exame.descricao from atendimento_has_exame a left join funcionario on id_funcionario = id_tecnico left join pessoa on funcionario.pessoa_id_pessoa = pessoa.id_pessoa left join exame on exame.id_exame = a.exame_id_exame left join tipo_exame on id_tipo_exame = id_tipo where a.atendimento_id_atendimento = ".$li['id_atendimento'];
    $res = mysqli_query($conexao,$sql_exame);
    while($l = mysqli_fetch_assoc($res)) {
      echo "   | Técnico: ".$l['tecnico'];
      echo "   | Status: ".$l['status'];
      echo "   | Descricao Exame :".$l['descricao_exame'];
      echo "   | Exame:".$l['descricao']."<br>";

    }

  }
  mysqli_close($conexao);
//echo "<script>alert(Exame concluído); window.location='painel.php';</script>";

}

   ?>

  </div>


</div>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">Miojo de feijão hospitalar &copy; </div>
    </div>
  </div>
</footer>

<!--Scripts--> 
<script src="scripts/jquery-1.10.2.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script> 
<script src="scripts/jquery.smooth-scroll.min.js"></script> 
<script src="scripts/mixitup/jquery.mixitup.min.js"></script> 
<script src="scripts/theme.js"></script> 
<script>
		$('.nav-tabs a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		})
	</script>
	
</body>
