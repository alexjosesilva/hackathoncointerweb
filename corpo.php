<?php
  include 'conexao.php';
  
 #Verifique se o registro existe	
 $query = "SELECT * FROM tb_manutencao";
	
  $result = mysqli_query($link,$query);
	
   if($result){
	   
		while($row = mysqli_fetch_array($result)){
			$cd_tecnico		= $row["cd_tecnico"];
			$status 	= $row["status"];
			$cliente 	= $row["cd_cliente"];
			$maquina 	= $row["cd_maquina"];
			
			echo "<div class='box250x300'>";

			if($status==1){
				echo "<br><img src='image/persona1.png' height='50' class='dropbtn'/>";
			}
			else if($status==2){
				echo "<br><img src='image/persona2.png' height='50' class='dropbtn'/>";
			}
			else if($status==3){
				echo "<br><img src='image/persona3.png' height='50' class='dropbtn'/>";
			}
					
			echo "<br/>";
			echo "Funcionario: ".$cd_tecnico."<br/>";
			echo "Cliente: ".$cliente."<br/>";
			echo "Máquina: ".$maquina."<br/>";
			echo "</div>";
		}
	}
?>

