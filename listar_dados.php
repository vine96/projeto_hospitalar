<!DOCTYPE html>

<?php
	$user = "root";
	$host = 'localhost';
	$dbname = "miojo";
	$password = '';

	$conexao = mysqli_connect($host, $user, $password, $dbname);
	mysqli_query($conexao, "SET NAMES 'utf8'");
	if (!$conexao) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
	}

	$sqlpac = ("select count(id_paciente) from paciente");
	$sqlfun = ("select count(id_funcionario) from funcionario");
	$sqlatd = ("select count(id_atendimento) from atendimento");
	$sqlexm = ("select count(id_exame) from exame");
	
	$dadospac = mysqli_query($conexao, $sqlpac) or die(mysqli_error());
	$dadosfun = mysqli_query($conexao, $sqlfun) or die(mysqli_error());
	$dadosatd = mysqli_query($conexao, $sqlatd) or die(mysqli_error());
	$dadosexm = mysqli_query($conexao, $sqlexm) or die(mysqli_error());
	
	$linhapac = mysqli_fetch_assoc($dadospac);
	$linhafun = mysqli_fetch_assoc($dadosfun);
	$linhaatd = mysqli_fetch_assoc($dadosatd);
	$linhaexm = mysqli_fetch_assoc($dadosexm);

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Free HTML5 Website Template by uicookies.com">
	<meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive">
	<meta name="author" content="RUHAN E GABRIELA">
	
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

</head>


<body>
	<section class="probootstrap-section" id="section-counter">
	  <div class="container">
		<div class="row">
		  <div class="col-md probootstrap-animate">
			<div class="probootstrap-counter text-center">
			  <span class="probootstrap-number" data-number="<?php $pac = implode ("",$linhapac); echo "$pac"?>"></span>
			  <span class="probootstrap-label">Pacientes</span>
			</div>
		  </div>
		  <div class="col-md probootstrap-animate">
			<div class="probootstrap-counter text-center">
			  <span class="probootstrap-number" data-number="<?php $fun = implode ("",$linhafun); echo "$fun"?>"></span>
			  <span class="probootstrap-label">Funcionários</span>
			</div>
		  </div>
		  <div class="col-md probootstrap-animate">
			<div class="probootstrap-counter text-center">
			  <span class="probootstrap-number" data-number="<?php $atd = implode ("",$linhaatd); echo "$atd"?>"></span>
			  <span class="probootstrap-label">Atendimentos</span>
			</div>
		  </div>    
		  <div class="col-md probootstrap-animate">
			<div class="probootstrap-counter text-center">
			  <span class="probootstrap-number" data-number="<?php $exm = implode ("",$linhaexm); echo "$exm"?>"></span>
			  <span class="probootstrap-label">Exames</span>
			</div>
		  </div>    
		</div>
	  </div>
	  </section>
	  
	 
	  
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>

  <script src="js/main.js"></script>
</body>

</html>