<?php

require_once("conexao.php");


session_start();
echo "login";
if (isset($_POST['login']) && isset($_POST['senha'])) {
echo "logine";

$usuario= $_POST['login'];
//$senha= md5(mysqli_real_escape_string($_POST['senha']));
$senha= md5($_POST['senha']);


	$sql = "SELECT id_funcionario, login, senha, id_cargo from funcionario join cargo on cargo_id_cargo = id_cargo WHERE login = '$usuario' AND senha = '$senha'";
			$query = mysqli_query($conexao,$sql);

			$linhas = mysqli_affected_rows($conexao);

			echo $linhas;



			if ($linhas > 0) {

				while ($row = mysqli_fetch_assoc($query)) {
					$idsession = $row['id_funcionario'];
					$usuario = $row['login'];
					$senha = $row['senha'];
					$tipos = $row['id_cargo'];
				}
					
				session_start(); 	

				$_SESSION['id_funcionario'] = $idsession;
				$_SESSION['usuario_session'] = $usuario;
				$_SESSION['senha_session'] = $senha;
				$_SESSION['id_cargo'] = $tipos;	

			

			
				header ('Location: painel.php');
				exit();
			}

		
			     
			    else {
				
					
				//echo("<script>alert('Usuário inválido');</script>")
				
				$_SESSION['id_funcionario'] = "";
				$_SESSION['usuario_session'] = "erro";
				$_SESSION['senha_session'] = "erro"; 
				$_SESSION['erro'] = "Usuário inválido";


				header ('Location: login.php');
				


			exit();
			
				}

		}
		

           
?>