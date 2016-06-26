<?php
   session_start();
      include('conexion.php');
	  
	  if (isset($_POST['enviar'])) 
	  {
		  mysql_query("DELETE FROM preguntas WHERE id = '".$_POST['id_pregunta']."'");

		  header("Location: preguntas.php?id_cuestionario=".$_POST['id_cuestionario']);
	  }
?> 