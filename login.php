<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}
 
// Include config file
require_once "conexao.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor insira sua matricula.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor insera sua senha.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * FROM tb_usuario WHERE matricula =".$username." && senha=".$password;
       
		$result = mysqli_query($link,$sql);
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		$count = mysqli_num_rows($result);
        if($count == 1) {

				session_start();
				
				// Store data in session variables
				$_SESSION["loggedin"]   = true;
				$_SESSION["id_usuario"] = $row['id_usuario']; ;
				$_SESSION["ds_nome"] 	= $row['ds_nome']; 				
				$_SESSION["email"] 		= $row['email']; 
				$_SESSION["senha"] 		= $row['senha'];
				$_SESSION["telefone"] 	= $row['telefone']; 
				$_SESSION["perfil"] 	= $row['perfil']; 
				$_SESSION["matricula"] 	= $row['matricula']; 
				
				// Redirect user to welcome page
				header("location: home.php");
		 }else{
                echo "<span style='color:red;'>Oops! Dados errados. Por favor refaça a operação.</span>";
         }
        
        
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
			font: 14px sans-serif; 
			background-image: url(image/fundo1a.jpg);
		}
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
		<img src="image/logo.png" alt="logo" height="80" width="80">
        <h2>Login</h2>
        <p>Preencher com suas credenciais para o login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Matricula</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Senha</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
				<input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Dificuldades em acessar ? <a href="recuperar.php">Recuperar Conta</a>.</p>
        </form>
    </div>    
</body>
</html>