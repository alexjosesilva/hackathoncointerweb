<?php
	//Sample Database Connection Syntax for PHP and MySQL.
	
	//Connect To Database
	
	$hostname="hcm4e9frmbwfez47.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	$username="yog0syz1db4hlmro";
	$password="bz8z53n7b7bucvco";
	$dbname="baeyuevllfgo9423";
	$usertable="tb_usuario";
	$yourfield = "ds_nome";
	
	$link = mysqli_connect($hostname,$username, $password);
	$db= mysqli_select_db($link,$dbname);
	
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
?>