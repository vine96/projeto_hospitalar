<?php
      session_start(); // Inicia a sessão
      $_SESSION['id_funcionario'] = "";
	  $_SESSION['usuario_session'] = "erro";
	  $_SESSION['senha_session'] = "erro";
      //session_unset(); // remove all session variables
      //session_destroy(); // Destrói a sessão limpando todos os valores salvos
      header("Location: login.php"); // Redireciona o visitante
  ?>