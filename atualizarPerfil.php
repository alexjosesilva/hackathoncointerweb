<?php

/*atualizar perfil*/

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: login.php");
		exit;
	}
 
// Include config file
require_once "conexao.php";

if($link === false){ 
    die("ERROR: Could not connect. ". mysqli_connect_error()); 
} 
  if(!empty(trim($_POST["ds_nome"]))){
	$novoNome = $_POST["ds_nome"];
  }
  if(!empty(trim($_POST["id_usuario"]))){
	$id_usuario = $_POST["id_usuario"];
  }
  
  if(!empty(trim($_POST["matricula"]))){
	$novaMatricula = $_POST["matricula"];
  }
  
  if(!empty(trim($_POST["email"]))){
	$novoEmail = $_POST["email"];
  }
  
  if(!empty(trim($_POST["telefone"]))){
	$novoTelefone = $_POST["telefone"];
  }
  
   if(!empty(trim($_POST["senha"]))){
	$novoSenha = $_POST["senha"];
  }

   if(!empty(trim($_POST["id_usuario"]))){
	
	   $sql = "UPDATE tb_usuario SET ds_nome='$novoNome',matricula='$novaMatricula',email='$novoEmail',telefone='$novoTelefone',senha='$novoSenha'  WHERE id_usuario=".$id_usuario;

		if(mysqli_query($link, $sql)){ 
			echo "Dados Alterados com successfully."; 
			
			// Redirect user to welcome page
			header("location: perfil.php");
			header("Refresh:0");
		} else { 
			echo "ERROR: Could not able to execute $sql. ".mysqli_error($link); 
			// Redirect user to welcome page
				header("location: perfil.php");
		}  
   }else{
		echo "ERROR:Usuario sem id";
   }
mysqli_close($link); 

?> 
