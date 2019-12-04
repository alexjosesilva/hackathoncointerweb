<?php
	//Sample Database Connection Syntax for PHP and MySQL.
	
	//Connect To Database
	
	$hostname="hcm4e9frmbwfez47.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	$username="yog0syz1db4hlmro";
	$password="bz8z53n7b7bucvco";
	$dbname="baeyuevllfgo9423";
	$usertable="tb_usuario";
	$yourfield = "ds_nome";
	
	$con = mysqli_connect($hostname,$username, $password);
	$db= mysqli_select_db($con,$dbname);
	
	# Verifique se o registro existe
	
	$query = "SELECT * FROM $usertable";
	
	$result = mysqli_query($con,$query);
	
	if($result){
		echo "Lista Usuario<br/>";
		while($row = mysqli_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Nome: ".$name."<br/>";
		}
	}
?>