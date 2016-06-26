<?php
   session_start();
      include('conexion.php');
	  
	  if (isset($_POST['enviar'])) 
	  {
		  if ($_POST['id_respuesta'] == 1)
		  {
		      $sql1 = mysql_query("SELECT respuesta1_comprobacion FROM preguntas WHERE id = '".$_POST['id_pregunta']."'");
	          $check1 = mysql_fetch_array($sql1);
			  $acierto = $check1[0];
			  
			  mysql_query("INSERT IGNORE INTO preguntas_respondidas (id_usuario, id_pregunta, id_cuestionario, acierto) VALUES ('".$_POST['id_usuario']."', '".$_POST['id_pregunta']."', '".$_POST['id_cuestionario']."', '".$acierto."')");
		  }
 		  else if ($_POST['id_respuesta'] == 2)
		  {
		      $sql1 = mysql_query("SELECT respuesta2_comprobacion FROM preguntas WHERE id = '".$_POST['id_pregunta']."'");
	          $check1 = mysql_fetch_array($sql1);
			  $acierto = $check1[0];
			  
			  mysql_query("INSERT IGNORE INTO preguntas_respondidas (id_usuario, id_pregunta, id_cuestionario, acierto) VALUES ('".$_POST['id_usuario']."', '".$_POST['id_pregunta']."', '".$_POST['id_cuestionario']."', '".$acierto."')");
		  }
 		  else if ($_POST['id_respuesta'] == 3)
		  {
		      $sql1 = mysql_query("SELECT respuesta3_comprobacion FROM preguntas WHERE id = '".$_POST['id_pregunta']."'");
	          $check1 = mysql_fetch_array($sql1);
			  $acierto = $check1[0];
			  
			  mysql_query("INSERT IGNORE INTO preguntas_respondidas (id_usuario, id_pregunta, id_cuestionario, acierto) VALUES ('".$_POST['id_usuario']."', '".$_POST['id_pregunta']."', '".$_POST['id_cuestionario']."', '".$acierto."')");
		  }
 		  else if ($_POST['id_respuesta'] == 4)
		  {
		      $sql1 = mysql_query("SELECT respuesta4_comprobacion FROM preguntas WHERE id = '".$_POST['id_pregunta']."'");
	          $check1 = mysql_fetch_array($sql1);
			  $acierto = $check1[0];
			  
			  mysql_query("INSERT IGNORE INTO preguntas_respondidas (id_usuario, id_pregunta, id_cuestionario, acierto) VALUES ('".$_POST['id_usuario']."', '".$_POST['id_pregunta']."', '".$_POST['id_cuestionario']."', '".$acierto."')");
		  }
		  
		  $sql2 = mysql_query("SELECT veces_respondida FROM preguntas WHERE id = '".$_POST['id_pregunta']."'");
	      $check2 = mysql_fetch_array($sql2);
		  
		  $veces_respondida = $check2[0] + 1;
		  
		  mysql_query("UPDATE preguntas SET veces_respondida = $veces_respondida WHERE id = '".$_POST['id_pregunta']."'");
		  
		  $id_cuestionario = $_POST['id_cuestionario'];

		  header("Location: index_cuestionario.php?id_cuestionario=".$id_cuestionario);
	  }
?> 