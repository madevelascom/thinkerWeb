<?php
   session_start();
      include('conexion.php');
	  
	  if (isset($_POST['enviar'])) 
	  {
		if($_POST['aleatorias'] != "0"){
			$_POST['aleatorias']="1";
			}
			
		  mysql_query("UPDATE cuestionarios SET nombre = '".$_POST['nombre_del_cuestionario']."', aleatorio = '".$_POST['aleatorias']."', preguntas_aleatorias = '".$_POST['preguntas_aleatorias']."' WHERE id = '".$_POST['id_cuestionario']."';");

		  header("Location: cuestionarios.php");
	  }
?> 
