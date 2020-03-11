<?php session_start();


if (isset($_SESSION['usuario_session']) == "erro" && $_SESSION['senha_session'] == "erro" && $_SESSION['id_funcionario'] == ""){
	//echo("<script>alert();</script>");
	if (isset($_SESSION['erro']) && $_SESSION['erro'] != ""){
		//echo $_SESSION['erro'];
		echo("<script>alert('Usuário inválido');</script>");
		$_SESSION['erro'] = "";
	}
}else{
  echo "Usuário não logado";
}


/*}elseif (isset($_SESSION['usuario_session']) && (isset($_SESSION['senha_session'])) && (!isset($_SESSION['id_funcionario']))){
      echo ("<script>alert('Usuário inválido');</script>");
}else{
echo "teste";
}*/


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Login - Miojo de Feijão</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
  <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="uicookies.com" />
  
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
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navbar-dark">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html">Health</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-nav" aria-controls="probootstrap-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="probootstrap-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="index.html" class="nav-link pl-0">Início</a></li>
          <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
          <li class="nav-item"><a href="painel.php" class="nav-link">Painel</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contato</a></li>
        </ul>
        <div class="ml-auto">
          <form action="#" method="get" class="probootstrap-search-form mb-sm-0 mb-3">
            <div class="form-group">
              <button class="icon submit"><span class="icon-magnifying-glass"></span></button>
              <input type="text" class="form-control" placeholder="Buscar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <header role="banner">
    <div class="container" style="margin: 0; padding: 0">
	
          <a href="index.html" ><img src="images/logo.jpg" width="200px" alt="Free Template by ProBootstrap" style="margin: 0; padding: 0"></a>
        
     
    </div>
  </header>

 
  
  

  <section class="probootstrap-services">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-3 pb-5 probootstrap-aside-stretch-left probootstrap-inside">
          <div class="mb-3 pt-5">
            <h2 class="h6">Departamentos</h2>
            <ul class="list-unstyled probootstrap-light mb-4">
              <li class="active"><a href="#">Enfermeiros</a></li>
              <li><a href="#">Médicos</a></li>
              <li><a href="#">Farmacêuticos</a></li>
              <li><a href="#">Pacientes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9 pl-md-5 pb-5 pl-0 probootstrap-inside">
          <h1 class="mt-4 mb-4">Login</h1>
           <!--<form action="login.php">
			<label></label>
			<div class="form-group front">
				<input type="text" placeholder="usuário" required>
			</div>
			<div class="form-group front">
				<input type="password" placeholder="senha" required>
			</div>-->
			
			
			<form action="confirm_login.php" method="POST" name="form_login">	
				<div class="form-group front">
				<input type="text" placeholder="usuário" required name="login">
				</div>
				<div class="form-group front">
				<input type="password" placeholder="senha" required name="senha">
				</div>
				<input type="submit" value="Entrar" name="clicar" id="clicar" onclick="clicou()">
					<div class="form-group">
				<a href="#"><h6>Esqueci minha senha</h6></a>
			  </div>
			</form>
			
	
        </div>
      </div>
    </div>

  <section class="probootstrap-section" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="22">0</span>
              <span class="probootstrap-label">Founders</span>
            </div>
          </div>
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="182">0</span>
              <span class="probootstrap-label">Number of Staffs</span>
            </div>
          </div>
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="8921">0</span>
              <span class="probootstrap-label">Happy Patients</span>
            </div>
          </div>    
          <div class="col-md probootstrap-animate">
            <div class="probootstrap-counter text-center">
              <span class="probootstrap-number" data-number="252">0</span>
              <span class="probootstrap-label">Business Partner</span>
            </div>
          </div>    
        </div>
      </div>
      
    </section>


  <footer class="probootstrap-footer">
    <div class="container">
      <div class="row mb-5">
        
        
        
        <div class="col-md-3">
          <h3 class="heading">Siga a gente:</h3>
          <ul class="probootstrap-footer-social">
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
          </ul>
        </div>
      </div>
      <!-- END row -->
      <div class="row probootstrap-copyright">
        <div class="col-md-12">
          <p><small>&copy; 2019 <a href="#" target="_blank">Miojão Hospitalar</a>. Todos os direitos reservados. Designed &amp; Developed by <a href="#" target="_blank">miojao.com</a>  </small></p>
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
  
  <script>
  

  </script>
  
</body>
</html>