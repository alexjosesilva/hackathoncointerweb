<?php
	// Initialize the session
	session_start();
	 
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: login.php");
		exit;
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<title>Desktop</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>

<body>
	<div id="corpo_total">
		<div id="topo" class="header">
			<?php
				include 'header.php';
			?>
		</div>
		<div id="corpo">
			<?php
				include 'corpo.php';
			?>	
		</div>
		
		<div id="rodape">
			<p style="font-size:14px";> &copy;copyright 2019 - todos os direitos estão reservados</p>
		</div>
	</div>
</body>
</html>
