<?php
	// Initialize the session
	session_start();
	 
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: login.php");
		exit;
	}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>

<div class="wrapper">
<div id="corpo_total">
	<div id="topo" class="header">
		<?php
			include 'header.php';
		?>
	</div>
	<div id="corpo" >
		
		<img src="image/persona.png" height="100" />
		
		<?php
			echo "<br>";
			if($_SESSION["perfil"]==1){
				echo "<b>Perfil:</b> Perfil Administrador";
			}
			else if($_SESSION["perfil"]==2){
				echo "<b>Perfil:</b> Perfil Supervisor";
			}
			else if($_SESSION["perfil"]==3){
				echo "<b>Perfil:</b> Perfil Técnico";
			}
			echo "<br>";
		?>	
		<div class="wrapper">
			<form action="atualizarPerfil.php" method="post" >
            	
				<input type="hidden" name="id_usuario" class="form-control" value="<?php echo $_SESSION["id_usuario"]; ?>" >
				<div class="form-group">
					<label>Nome</label>
					<input type="text" name="ds_nome" class="form-control" value="<?php echo $_SESSION["ds_nome"]; ?>">
					<span class="help-block"></span>
				</div>  
				
				<div class="form-group">
					<label>Matricula</label>
					<input type="text" name="matricula" class="form-control" value="<?php echo $_SESSION["matricula"]; ?>">
					<span class="help-block"></span>
				</div>  
				
				<div class="form-group">
					<label>Email Novo</label>
					<input type="text" name="email" class="form-control" value="<?php echo $_SESSION["email"]; ?>">
					<span class="help-block"></span>
				</div>
				
				<div class="form-group" >
					<label>Senha Nova</label>
					<input type="text" name="senha" class="form-control" value="<?php echo $_SESSION["senha"]; ?>">
					<span class="help-block"></span>
				</div>
			
				<div class="form-group">
					<label>Telefone Novo</label>
					<input type="text" name="telefone" class="form-control" value="<?php echo $_SESSION["telefone"]; ?>">
					<span class="help-block"></span>
				</div>
				
				
				
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Atualizar Perfil">
					<input type="reset" class="btn btn-default" value="Reset">
				</div>
       
				
			</form>
		</div>
	
	
	
	<div id="rodape">
		<p style="font-size:14px";> &copy;copyright 2019 - todos os direitos estão reservados</p>
	</div>
</div>

</body>
</html>