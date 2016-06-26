<?php
   session_start();
      include('conexion.php');
	  
	  if (isset($_POST['enviar'])) 
	  {
		  $sql1 = mysql_query("SELECT id_pregunta_cuestionario FROM preguntas WHERE id_cuestionario = '".$_POST['id_cuestionario']."' ORDER BY id_pregunta_cuestionario DESC");
	      $check1 = mysql_num_rows($sql1);
		  $check_id_pregunta = mysql_fetch_array($sql1);
		 
		  if ($check1)
		      $id_pregunta_cuestionario = $check_id_pregunta[0] + 1;
	      else
		      $id_pregunta_cuestionario = 1;
			  
		  mysql_query("INSERT INTO preguntas (id_cuestionario, id_pregunta_cuestionario, imagen, pregunta, respuesta1, respuesta1_comprobacion, respuesta2, respuesta2_comprobacion, respuesta3, respuesta3_comprobacion, respuesta4, respuesta4_comprobacion) VALUES ('".$_POST['id_cuestionario']."', '".$id_pregunta_cuestionario."', '".$_POST['imagen']."', '".$_POST['pregunta']."', '".$_POST['respuesta1']."', '".$_POST['respuesta1_comprobacion']."', '".$_POST['respuesta2']."', '".$_POST['respuesta2_comprobacion']."', '".$_POST['respuesta3']."', '".$_POST['respuesta3_comprobacion']."', '".$_POST['respuesta4']."', '".$_POST['respuesta4_comprobacion']."')");

		  header("Location: preguntas.php?id_cuestionario=".$_POST['id_cuestionario']);
	  }
?> 
