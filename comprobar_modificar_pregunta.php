<?php
   session_start();
      include('conexion.php');
	  
	  if (isset($_POST['enviar'])) 
	  {
		  mysql_query("UPDATE preguntas SET imagen = '".$_POST['imagen']."', pregunta = '".$_POST['pregunta']."', respuesta1 = '".$_POST['respuesta1']."', respuesta1_comprobacion = '".$_POST['respuesta1_comprobacion']."', respuesta2 = '".$_POST['respuesta2']."', respuesta2_comprobacion = '".$_POST['respuesta2_comprobacion']."', respuesta3 = '".$_POST['respuesta3']."', respuesta3_comprobacion = '".$_POST['respuesta3_comprobacion']."', respuesta4 = '".$_POST['respuesta4']."', respuesta4_comprobacion = '".$_POST['respuesta4_comprobacion']."' WHERE id = '".$_POST['id_pregunta']."'");

		  header("Location: preguntas.php?id_cuestionario=".$_POST['id_cuestionario']);
	  }
?> 
