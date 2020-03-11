<?php 
include("conexao.php");

session_start();

/*if (!isset($_SESSION['id_funcionario']) && $_SESSION['usuario_session'] == "erro" && $_SESSION['senha_session'] == "erro"){
  echo ("<script>alert('Você precisa realizar o login para acessar esta página =/'); window.location.href='login.php'</script>");
}*/

if (isset($_SESSION['usuario_session']) == "erro" && $_SESSION['senha_session'] == "erro" && (!($_SESSION['id_funcionario']))){
  echo ("<script>alert('Você precisa realizar o login para acessar esta página =/'); window.location.href='login.php'</script>");
}

if (isset($_SESSION['id_funcionario']) && $_SESSION['id_funcionario'] != "") {
    if (isset($_SESSION['id_funcionario']) && $_SESSION['id_cargo'] == 6) {
      echo "Você logou como: Administrador";
    }elseif (isset($_SESSION['id_funcionario']) && $_SESSION['id_cargo'] == 2){
      echo "Você logou como: Médico";
    }elseif (isset($_SESSION['id_funcionario']) && $_SESSION['id_cargo'] == 5) {
      echo "Você logou como: Enfermeiro";
    }elseif (isset($_SESSION['id_funcionario']) && $_SESSION['id_cargo'] == 1) {
      echo "Você logou como: Farmacêutico";
    }elseif (isset($_SESSION['id_funcionario']) && $_SESSION['id_cargo'] == 8) {
	echo "Você logou como: Técnico de Exame";}
  }
  

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Health - Free HTML5 Bootstrap 4 Template by uicookies.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
  <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="uicookies.com"/>
  
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/style.css">
  
  <link rel="stylesheet" href="css/estilo.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="http://digitalbush.com/files/jquery/maskedinput/rc3/jquery.maskedinput.js" type="text/javascript"></script>

<script>
jQuery(function($){
	$(".nascimento").mask("99/99/9999");
   $(".cpf").mask("999.999.999-99");
});
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

  <style>
	  .modal-body{
      color:black;
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navbar-dark">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html">Health</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="probootstrap-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="index.html" class="nav-link pl-0">Início</a></li>
          <li class="nav-item active"><a href="departments.html" class="nav-link">Login</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">Sobre</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contato</a></li>
        </ul>
        <div class="ml-auto">
          <form action="#" method="get" class="probootstrap-search-form mb-sm-0 mb-3">
            <div class="form-group">
              <button class="icon submit"><span class="icon-magnifying-glass"></span></button>
              <input type="text" class="form-control" placeholder="Pesquisar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <header role="banner">
          <a href="index.html"><img src="images/logo.jpg" width="200px" alt="Free Template by ProBootstrap"></a>
  </header>

<!-- Modal -->
<?php
//Tela de cadastros
include('cadastros/cargos/cargos.php');
include('cadastros/pessoas/pessoas.php');
include('cadastros/enderecos/enderecos.php');
include('cadastros/funcionarios/funcionarios.php');
include('cadastros/pacientes/pacientes.php');
include('cadastros/responsaveis/responsaveis.php');

//Tela de registros
include('registros/medicamentos/medicamentos.php');
include('registros/tipos_exames/tipos_exames.php');
include('registros/exames/exames.php');
include('registros/boletim/boletim.php');

//Tela de listagem
include('listar/listar_cargos.php');
include('listar/listar_pessoas.php');
include('listar/listar_pacientes.php');
include('listar/listar_medicamentos.php');
include('listar/listar_exames.php');
include('listar/listar_tipos_exames.php');
include('listar/listar_funcionarios.php');
?>

  <section class="probootstrap-services">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-3 pb-5 probootstrap-aside-stretch-left probootstrap-inside">
          <div class="mb-3 pt-5">
            <h2 class="h6">Listar</h2>
            <ul class="list-unstyled probootstrap-light mb-4">
			<?php
			if ($_SESSION['id_cargo'] == 6){
			echo '<li class="active"><a href="#" class="btn-sm btn-primary" data-toggle="modal" data-target="#listar_cargos">Cargos</a></li>';}
			if ($_SESSION['id_cargo'] == 6){
			echo '<li class="active"><a href="#" class="btn-sm btn-primary" data-toggle="modal" data-target="#listar_pessoas">Pessoas</a></li>';}
            if ($_SESSION['id_cargo'] == 6){
			echo '<li class="active"><a href="#" class="btn-sm btn-primary" data-toggle="modal" data-target="#listar_funcionarios">Funcionários</a>
			</li>';
			}
            if ($_SESSION['id_cargo'] == 6 || $_SESSION['id_cargo'] == 5 || $_SESSION['id_cargo'] == 2){
			echo '<li class="active"><a href="#" class="btn-sm btn-primary" data-toggle="modal" data-target="#listar_pacientes">Pacientes</a></li>';}
			if ($_SESSION['id_cargo'] == 6 || $_SESSION['id_cargo'] == 1 || $_SESSION['id_cargo'] == 5 || $_SESSION['id_cargo'] == 2){
			echo '<li class="active"><a href="#" class="btn-sm btn-primary" data-toggle="modal" data-target="#listar_medicamentos">Medicamentos</a></li>';}
			if ($_SESSION['id_cargo'] == 6 || $_SESSION['id_cargo'] == 8){
			echo '<li class="active"><a href="#" class="btn-sm btn-primary" data-toggle="modal" data-target="#listar_tipos_exames">Tipos de Exames</a></li>';}
			if ($_SESSION['id_cargo'] == 6 || $_SESSION['id_cargo'] == 8){
			echo '<li class="active"><a href="#" class="btn-sm btn-primary" data-toggle="modal" data-target="#listar_exames">Exames</a></li>';}
			if ($_SESSION['id_cargo'] == 6 || $_SESSION['id_cargo'] == 5){
			echo '<li><a href="#">Boletins</a></li>';}
			  ?>
            </ul>
          </div>
        </div>
        <div class="col-md-9 pl-md-5 pb-5 pl-0 probootstrap-inside">
		<?php
		if ($_SESSION['id_cargo'] == 6){
			$painel = "ADMINISTRATIVO";
		}
		elseif ($_SESSION['id_cargo'] == 2){
			$painel = "DO MÉDICO";
		}
		elseif ($_SESSION['id_cargo'] == 5){
			$painel = "DO ENFERMEIRO";
		}
		elseif ($_SESSION['id_cargo'] == 1){
			$painel = "DO FARMACÊUTICO";
		}
		elseif($_SESSION['id_cargo'] == 8){
			$painel = "DO TÉCNICO DE EXAME";
		}
		
          echo '<h1 class="mt-4 mb-4">Bem vindo ao PAINEL '.$painel.' =)</h1>';
		 ?>

<?php

echo "<h2>Buscar paciente por cpf:</h2>";
echo "<form action='busca_paciente_cpf.php' method='post'><input type='text' name='cpf'></input><br><br><button type='submit' class='btn-sm btn-primary'>Procurar Paciente</button></form>";

if ($_SESSION['id_cargo'] == 2){
?>
<form method="post" action="seleciona_paciente.php">
<?php
  include('conexao.php');
  $sql = "select id_boletim, prioridade.descricao, pessoa.nome from boletim left join prioridade on prioridade_id_prioridade = id_prioridade left join paciente on paciente_id_paciente = id_paciente left join pessoa on pessoa_id_pessoa = id_pessoa where boletim.id_medico is NULL order by prioridade.id_prioridade";
  $return = mysqli_query($conexao,$sql);
  mysqli_close($conexao);
  while ($row = mysqli_fetch_assoc($return)) {
  echo "<input value = ".$row['id_boletim']." name='paciente' type='radio'>   ".$row["descricao"]." - ".$row["nome"]." - ".$row["id_boletim"]."</input><br>";
  }
?>
<br>
<button type="submit" class="btn-sm btn-primary">Selecionar Paciente</button>
<br>______________________________________________________________
</form>
<h3>Seus Pacientes:</h3>
<?php
  include('conexao.php');
  $sql = "select id_boletim, prioridade.descricao, pessoa.nome, atendimento.tratamento,atendimento.id_atendimento, atendimento.hospital from boletim  join prioridade on boletim.prioridade_id_prioridade = prioridade.id_prioridade  join paciente on boletim.paciente_id_paciente = paciente.id_paciente  join pessoa on paciente.pessoa_id_pessoa = pessoa.id_pessoa  join atendimento on boletim.id_boletim = atendimento.boletim_id_boletim where boletim.id_medico = ".$_SESSION['id_funcionario']." order by prioridade.id_prioridade";
  //echo $sql;
  $return = mysqli_query($conexao,$sql);
  while ($row = mysqli_fetch_assoc($return)) {
     echo "<h5>".$row["descricao"]." - ".$row['nome']."</h5> ";
     $sql_tipo_exame = "select descricao from tipo_exame";
     $r = mysqli_query($conexao,$sql_tipo_exame);

     $sql_exame = "select descricao_exame, status from exame join atendimento_has_exame on atendimento_id_atendimento = ".$row['id_atendimento']." and exame_id_exame = exame.id_exame";
     echo "Exames em andamento:<br>";
     $return_exame = mysqli_query($conexao,$sql_exame);
     while($a = mysqli_fetch_assoc($return_exame)){
      //echo $a['status'];
      if($a['status']<>"FINALIZADO"){
        echo $a['descricao_exame']." - ".$a['status']."<br>";
      }
     }
     echo "Exames finalizados:<br>";
     while($b = mysqli_fetch_assoc($return_exame)){
      if($b['status']=="FINALIZADO"){
        echo $b['descricao_exame']." - ".$b['status']."<br>";
      }
     }
     ?>
     <form action='encaminhar.php' method='post'> 
      Selecionar exame:<br>
        <select name="tipo_exame">
        <?php
      while ($l = mysqli_fetch_assoc($r)) {
          echo "<option>".$l["descricao"]."</option>";
        }
        ?>
      </select> 

    <br>Descrição do exame: <br><input type="text" name="descr_exame" ></input><br><br>
    <?php
      echo "<button class='btn-sm btn-primary' type='submit' name='id_atendimento' value=".$row['id_atendimento'].">Encaminhar para exame</button></form> ";
     
     echo "Tratamento: <br>";
     if(is_null($row['tratamento'])){
      echo "Não há tratamento cadastrado.";
     }
  
     echo "<form action='tratamento.php' method='post'><textarea name='tratamento'>".$row['tratamento']."</textarea> <br><button class='btn-sm btn-primary' type='submit' name='id_boletim' value=".$row['id_boletim'].">Alterar tratamento</button></form> <br>";

     echo "<form action='alta.php' method='post'><button class='btn-sm btn-primary' type='submit' name='id_boletim' value=".$row['id_boletim'].">Dar Alta</button></form> <br>";
    if(is_null($row['hospital'])){
      echo "Paciente não foi encaminhado para hospital";
    }
    else{
      echo "Paciente foi encaminhado para hospital";
    }
     echo "<form action='hospital.php' method='post'><button class='brn-sm btn-primary' type='submit' name='id_atendimento' value=".$row['id_atendimento'].">Encaminhar para hospital</button></form><br>";
      echo "<form action='obito.php' method='post'><button class='brn-sm btn-primary' type='submit' name='id_atendimento' value=".$row['id_atendimento'].">Declarar óbito</button></form><br>______________________________________________________________";
    
  }
}

if ($_SESSION['id_cargo'] == 6 || $_SESSION['id_cargo'] == 5){
echo'		  <h1>Cadastro de: </h1>';
		  
		  //<!-- Button trigger modal -->

if ($_SESSION['id_cargo'] == 6){
echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#cargos">  Cargos</button>   ';
}
echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#responsaveis">  Responsáveis</button>   ';

echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#enderecos">  Endereços</button>   ';	  

if ($_SESSION['id_cargo'] == 6){		  
echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#funcionarios">  Funcionários</button>   ';
}
echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#pacientes">  Pacientes</button>    ';

}?>
		  <h1>Adicionar:</h1>
<?php
if($_SESSION['id_cargo'] == 6 || $_SESSION['id_cargo'] == 1){
echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#medicamentos">  Medicamentos</button>     ';
}
if($_SESSION['id_cargo'] == 8 || $_SESSION['id_cargo'] == 6){
echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#tiposexames">  Tipos de Exames</button>    ';
}
if($_SESSION['id_cargo'] == 8 || $_SESSION['id_cargo'] == 6){
echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#exames">  Exames</button>    ';
}
if($_SESSION['id_cargo'] == 6 || $_SESSION['id_cargo'] == 5){
echo '<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#boletim">  Boletim de atendimento</button>     <br><br>';
}
		  
if($_SESSION['id_cargo'] == 8){
  echo "<h1>Exames pendentes:</h1>";
  $sql = "select id_exame,tipo_exame.descricao,descricao_exame,p.nome medico,pessoa.nome paciente,id_tecnico,atendimento_has_exame.status from exame left join tipo_exame on id_tipo = id_tipo_exame left join atendimento_has_exame on exame_id_exame = id_exame left join atendimento on atendimento.id_atendimento = atendimento_id_atendimento left join boletim on boletim_id_boletim = id_boletim left join paciente on paciente_id_paciente = id_paciente left join pessoa on pessoa.id_pessoa = paciente.pessoa_id_pessoa left join funcionario on id_funcionario = id_medico left join pessoa p on p.id_pessoa = funcionario.pessoa_id_pessoa";
  include("conexao.php");
  $return_exame = mysqli_query($conexao,$sql);
  echo "<form action='seleciona_exame.php' method = 'post'>";
  while($exam = mysqli_fetch_assoc($return_exame)){
    //echo $exam['id_tecnico'];
    //echo $_SESSION['id_funcionario'];
    if($exam['id_tecnico'] == 0 || is_null($exam['id_tecnico']) && $exam['status'] <> "FINALIZADO"){
      echo "<input value =".$exam['id_exame']."  name='id_exame' type='radio'> ".$exam['descricao']." - ".$exam['descricao_exame']." - Médico: ".$exam['medico']." - Paciente: ".$exam['paciente']."<br>";
    }
  }
  echo "<button type='submit' class='btn-sm btn-primary'>Selecionar Exame</button></form>";
  echo "<h1>Seus exames:</h1>";
   $sql = "select id_exame,tipo_exame.descricao,descricao_exame,p.nome medico,pessoa.nome paciente,id_tecnico,atendimento_has_exame.status from exame left join tipo_exame on id_tipo = id_tipo_exame left join atendimento_has_exame on exame_id_exame = id_exame left join atendimento on atendimento.id_atendimento = atendimento_id_atendimento left join boletim on boletim_id_boletim = id_boletim left join paciente on paciente_id_paciente = id_paciente left join pessoa on pessoa.id_pessoa = paciente.pessoa_id_pessoa left join funcionario on id_funcionario = id_medico left join pessoa p on p.id_pessoa = funcionario.pessoa_id_pessoa";
  include("conexao.php");
  $return_e = mysqli_query($conexao,$sql);
    while($exam = mysqli_fetch_assoc($return_e)){
//echo "teste";
    if($exam['id_tecnico'] == $_SESSION['id_funcionario'] && $exam['status'] <> "FINALIZADO"){
      echo $exam['descricao']." - ".$exam['descricao_exame']." - Médico: ".$exam['medico']." - Paciente: ".$exam['paciente']."<br>";
      echo "<form method='post' action= 'encerra_exame.php'><button type='submit' name='id_exame' value=".$exam['id_exame']." class='btn-sm btn-primary'>Finalizar Exame</button></form>";
    }
  }

}


       ?>
		  
		  
          <br><?php echo '<a href="logout.php">Sair</a>'; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="22">0</span>
              <span class="probootstrap-label">Pessoas cadastradas</span>
            </div>
          </div>
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="182">0</span>
              <span class="probootstrap-label">Numéro de funcionários</span>
            </div>
          </div>
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="8921">0</span>
              <span class="probootstrap-label">Número de Pacientes</span>
            </div>
          </div>    
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="252">0</span>
              <span class="probootstrap-label">Exames Realizados</span>
            </div>
          </div>    
        </div>
      </div>
      
    </section>

  <footer class="probootstrap-footer">
    <div class="container">
      
      <!-- END row -->
      <div class="row probootstrap-copyright">
        <div class="col-md-12">
          <p><small>&copy; 2019 <a href="#" target="_blank">Miojão Clínica Médica</a>. Todos os direitos reservados. Developed by <a href="#" target="_blank">Vinícius Pecci</a>  </small></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
    <div id="probootstrap-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#32609e"/></svg></div>
  

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>

  <script src="js/main.js"></script>
  
  <!--<script>
  function mascaraData(val) {
  var pass = val.value;
  var expr = /[0123456789]/;

  for (i = 0; i < pass.length; i++) {
    // charAt -> retorna o caractere posicionado no índice especificado
    var lchar = val.value.charAt(i);
    var nchar = val.value.charAt(i + 1);

    if (i == 0) {
      // search -> retorna um valor inteiro, indicando a posição do inicio da primeira
      // ocorrência de expReg dentro de instStr. Se nenhuma ocorrencia for encontrada o método retornara -1
      // instStr.search(expReg);
      if ((lchar.search(expr) != 0) || (lchar > 3)) {
        val.value = "";
      }

    } else if (i == 1) {

      if (lchar.search(expr) != 0) {
        // substring(indice1,indice2)
        // indice1, indice2 -> será usado para delimitar a string
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }

    } else if (i == 4) {

      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }
    }

    if (i >= 6) {
      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
      }
    }
  }

  if (pass.length > 10)
    val.value = val.value.substring(0, 10);
  return true;
}

</script>-->

  
</body>
</html>