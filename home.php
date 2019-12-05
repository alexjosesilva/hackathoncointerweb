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
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
#corpo_total{
	width:100%; 
	/*height:1620px;*/
	background-image: url(image/fundo1a.jpg);
	background-attachment:fixed;
	/*background-size: 100% 100%;*/
}
#topo{
	width:100%; height:60px;
	background-color: #ff9900;
	padding-top:5px;
	padding-bottom:5px;
	position:absolute;
    top:0px;
}
#topo1{
	width:1150px; height:60px;
	margin-left:auto;
	margin-right:auto;
}
#logo{
	width:380px; height:60px;
	margin-left:auto;
	float:left;
	margin-right:30px;
}
#menu{
	width:600px; height:60px;
	font-size:12px;
	color:#ffffff;
	margin-left:1px;
	float:left;
	font-family: 'Righteous', cursive;
}
li{
	display:inline-block;
	margin-top:20px;
	margin-right:50px;
	float:left;	
}
a{
	text-decoration:none;
	color:#ffffff;	
}
a:hover{
	text-decoration:none;
	color:#ffff00;
	border-bottom: 5px solid red;	
}
#persona{
	width:60px; height:60px;
	margin-right:auto;
	float:right;
}
#corpo{
	width:1100px; height:1570px;
	margin-left:auto;
	margin-right:auto;
	margin-top:60px;
	padding:10px;
}
.box250x300{
	background-color:#ffffff;
	width:250px; height:300px;
	margin-left:10px;
	margin-top:10px;
	float:left;
	display:inline-block;
	border: 2px solid #ff9900;
	border-radius: 20px;
		
}
#rodape{
	width:100%; height:14px;
	background-color: #ff9900;
	color:#ffffff;
	text-align:center;
	padding:20px;
	float:left;
	font-family: 'Righteous', cursive;
}
.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%
}
.sticky + .content {
  padding-top: 60px;
}
.content {overflow:hidden;}
.aside {width:200px;}
.fleft {float:left;}
.fright {float:right;}
</style>
</head>

<body>
<div id="corpo_total">
	<div id="topo" class="header">
    	<div id="topo1">
        	<div id="logo">
            	<img src="image/logo2.png" height="60" />
           	</div>
            <div id="menu">
            	<ul>
            		<a href="/paginas/tecnico.php"><li>TECNICOS</li></a>
                    <a href="/paginas/manutencao.php"><li>MANUTENÇÕES</li></a>
                    <a href="/paginas/maquina.php"><li>MÁQUINAS</li></a>
                    <a href="/paginas/metrica.php"><li>MÉTRICAS</li></a>
                    <a href="/paginas/manuais.php"><li>MANUAIS</li></a>
            	</ul>
			</div>
            <div id="persona">
            	<img src="image/persona.png" height="50" style="margin-top:5px;"/>
				<b><?php echo htmlspecialchars($_SESSION["ds_nome"]); ?></b>
				<a href="logout.php" class="btn btn-danger">Sair</a>
			</div>
		</div>
	</div>
	<div id="corpo">
    	<div class="box250x300">
        </div>
        <div class="box250x300">
        </div>
        <div class="box250x300">
        </div>
        <div class="box250x300">
        </div>
		
		<div class="box250x300">
        </div>
        <div class="box250x300">
        </div>
        <div class="box250x300">
        </div>
        <div class="box250x300">
        </div>
		
	</div>
	<div id="rodape">
    <p style="font-size:14px";> &copy;copyright 2019 - todos os direitos estão reservados</p>
	</div>
</div>
</body>
</html>
