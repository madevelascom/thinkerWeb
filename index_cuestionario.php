<?php
ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body bgcolor="#99B3FF">
 <?php
    include('conexion.php');
	mysql_set_charset('utf8');
	session_start();

	$sql1 = mysql_query("SELECT id, nombre, aleatorio, preguntas_aleatorias, preguntas_aleatorias_restantes FROM cuestionarios WHERE id = '".$_GET['id_cuestionario']."'");
	$check1 = mysql_fetch_array($sql1);

	$sql_usuario = mysql_query("SELECT id FROM usuarios WHERE nombre = '".$_SESSION['nombre']."'");
	$check_usuario = mysql_fetch_array($sql_usuario);

	if ($check1)
	{
		$sql2 = NULL;
		
		if ($check1[2] == 1 && $check1[4] != 0)
		{
	        $sql2 = mysql_query("SELECT id, imagen, veces_respondida, pregunta, 
		    respuesta1, respuesta1_comprobacion, 
		    respuesta2, respuesta2_comprobacion, 
		    respuesta3, respuesta3_comprobacion, 
		    respuesta4, respuesta4_comprobacion 
		    FROM preguntas WHERE id_cuestionario = '".$check1[0]."' AND id_pregunta_cuestionario NOT IN (SELECT id_pregunta FROM preguntas_respondidas WHERE id_usuario = '".$check_usuario[0]."') ORDER BY RAND()");
			
			$preguntas_aleatorias_restantes = $check1[4] - 1;
			mysql_query("UPDATE cuestionarios SET preguntas_aleatorias_restantes = '".$preguntas_aleatorias_restantes."' WHERE id = '".$check1[0]."'");
		}
		else if ($check1[4] != 0)
		{
	        $sql2 = mysql_query("SELECT id, imagen, veces_respondida, pregunta, 
		    respuesta1, respuesta1_comprobacion, 
		    respuesta2, respuesta2_comprobacion, 
		    respuesta3, respuesta3_comprobacion, 
		    respuesta4, respuesta4_comprobacion 
		    FROM preguntas WHERE id_cuestionario = '".$check1[0]."' AND id_pregunta_cuestionario NOT IN (SELECT id_pregunta FROM preguntas_respondidas WHERE id_usuario = '".$check_usuario[0]."')");
			
			$preguntas_aleatorias_restantes = $check1[4] - 1;
			mysql_query("UPDATE cuestionarios SET preguntas_aleatorias_restantes = '".$preguntas_aleatorias_restantes."' WHERE id = '".$check1[0]."'");
		}
		
	    if ($sql2)
		{
		    $check2 = mysql_fetch_array($sql2);
		?>
<table align="center" width="993" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="975" height="104">
      <center><h1><?=$check1[1]?>
      <br><br>Pregunta: <?=$check2[3]?></h1></center>
      </td>
    </tr>
    <tr>
      <td height="313"><table width="944" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td width="336" height="235">&nbsp;</td>
            <td width="359">
            <?php
			if ($check2[1])
			{
				echo "<img src=\"$check2[1]\">";
			}
			else
			{
			    ?>
                <img src="imagenes/noimage.png">
                <?php
			}
			?>
            </td>
            <td width="249"><h2>Veces respondida: <?=$check2[2]?></h2></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="152"><table width="963" border="1" align="center" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td width="480" height="63"><h1>
            <center><form action="comprobar_respuesta.php" method="post">
            <input type="hidden" name="id_respuesta" value="1" />
            <input type="hidden" name="id_cuestionario" value="<?=$check1[0]?>" />
            <input type="hidden" name="id_pregunta" value="<?=$check2[0]?>" />
            <input type="hidden" name="id_usuario" value="<?=$check_usuario[0]?>" />
            <input type="submit" name="enviar" value="<?=$check2[4]?>" />
            </form></center>
            </h1></td>
            <td width="483"><h1>
            <center><form action="comprobar_respuesta.php" method="post">
            <input type="hidden" name="id_respuesta" value="2" />
            <input type="hidden" name="id_cuestionario" value="<?=$check1[0]?>" />
            <input type="hidden" name="id_pregunta" value="<?=$check2[0]?>" />
            <input type="hidden" name="id_usuario" value="<?=$check_usuario[0]?>" />
            <input type="submit" name="enviar" value="<?=$check2[6]?>" />
            </form></center>
            </h1></td>
          </tr>
          <tr>
            <td height="64"><h1>
            <center><form action="comprobar_respuesta.php" method="post">
            <input type="hidden" name="id_respuesta" value="3" />
            <input type="hidden" name="id_cuestionario" value="<?=$check1[0]?>" />
            <input type="hidden" name="id_pregunta" value="<?=$check2[0]?>" />
            <input type="hidden" name="id_usuario" value="<?=$check_usuario[0]?>" />
            <input type="submit" name="enviar" value="<?=$check2[8]?>" />
            </form></center>
            </h1></td>
            <td><h1>
            <center><form action="comprobar_respuesta.php" method="post">
            <input type="hidden" name="id_respuesta" value="4" />
            <input type="hidden" name="id_cuestionario" value="<?=$check1[0]?>" />
            <input type="hidden" name="id_pregunta" value="<?=$check2[0]?>" />
            <input type="hidden" name="id_usuario" value="<?=$check_usuario[0]?>" />
            <input type="submit" name="enviar" value="<?=$check2[10]?>" />
            </form></center>
            </h1></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
<?php
		}
		else
		{
			$sql_aciertos = mysql_query("SELECT * FROM preguntas_respondidas WHERE id_usuario = '".$check_usuario[0]."' AND id_cuestionario = '".$check1[0]."' AND acierto = 1");
			$check_aciertos1 = mysql_num_rows($sql_aciertos);
			$check_aciertos_array = mysql_fetch_array($sql_aciertos);	
			
			mysql_query("INSERT IGNORE INTO ranking (id_usuario, id_cuestionario, total) VALUES ('".$check_usuario[0]."', '".$check1[0]."', '".$check_aciertos1."')");
			
			$sql_aciertos_final = mysql_query("SELECT id_usuario, total FROM ranking ORDER BY total DESC");
			$check_aciertos2 = mysql_num_rows($sql_aciertos_final);	
				
			$sql_total = mysql_query("SELECT * FROM preguntas_respondidas WHERE id_usuario = '".$check_usuario[0]."' AND id_cuestionario = '".$check1[0]."'");
			$check_total = mysql_num_rows($sql_total);
			
			?>
<center><br><br><br>Cuestionario completado.<br>¡Muchas gracias por participar!<br><br><br><br><h2>Tu resultado ha sido:<br><br>Has acertado <?=$check_aciertos1?> de <?=$check_total?></h2><br><br><br><h2>Ranking de puntuación de usuarios</h2><br><br>
              <table width="190" border="1" cellspacing="0" cellpadding="1">
                <tbody>
                  <tr>
                    <td width="83">Nombre</td>
                    <td width="97">Puntuación</td>
                  </tr>
            <?php
			for ($i = 0; $i < $check_aciertos2; $i++)
			{
				$check_aciertos_final = mysql_fetch_array($sql_aciertos_final);
				
				$sql_aciertos_nombre = mysql_query("SELECT nombre FROM usuarios WHERE id = '".$check_aciertos_final[0]."'");		
			    $check_aciertos_nombre = mysql_fetch_array($sql_aciertos_nombre);
				
				?>
                <tr>
                    <td><?=$check_aciertos_nombre[0]?></td>
                    <td><?=$check_aciertos_final[1]?></td>
                </tr>
            <?php
			}
			?>
                </tbody>
              </table>
            </center>
            <?php
		}
	}
	else
	{
		echo "<center><h1>No hay ningún cuestionario con esa ID.</h1></center>";
	}
?>
</body>
</html>
<?php
ob_end_flush();
?>