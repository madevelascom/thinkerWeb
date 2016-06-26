<?php
   session_start();
      include('conexion.php');
	  
      mysql_query("DELETE FROM preguntas WHERE id_cuestionario = '".$_GET['id_cuestionario']."'");
      mysql_query("DELETE FROM preguntas_respondidas WHERE id_cuestionario = '".$_GET['id_cuestionario']."'");
	  mysql_query("DELETE FROM ranking WHERE id_cuestionario = '".$_GET['id_cuestionario']."'");
	  mysql_query("DELETE FROM cuestionarios WHERE id = '".$_GET['id_cuestionario']."'");

      header("Location: cuestionarios.php");
?> 