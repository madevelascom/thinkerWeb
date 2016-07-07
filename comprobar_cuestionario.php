<?php
   session_start();
      include('conexion.php');
	  
	  if (isset($_POST['enviar'])) 
	  {
		if($_POST['aleatorias'] != "0"){
			$_POST['aleatorias']="1";
			}
			
		  mysql_query("INSERT INTO cuestionarios (nombre, aleatorio, preguntas_aleatorias, preguntas_aleatorias_restantes) VALUES ('".$_POST['nombre_del_cuestionario']."', '".$_POST['aleatorias']."', '".$_POST['preguntas_aleatorias']."', '".$_POST['preguntas_aleatorias']."');");

		  header("Location: cuestionarios.php");
	  }
?> 