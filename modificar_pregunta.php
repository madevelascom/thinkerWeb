<?php
ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thinker! - Preguntas</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body bgcolor="#99B3FF">
<table width="993" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="975" height="104">
      </td>
    </tr>
    <tr>
      <td height="313" align="center" valign="top"><h1>Panel de administración</h1>
      
 <?php
    include('conexion.php');
	mysql_set_charset('utf8');
	session_start();
    if (empty($_SESSION['id'])) 
	{
        header("Location: admin.php");
	}
	else
	{
		  $sql1 = mysql_query("SELECT pregunta, imagen, respuesta1, respuesta1_comprobacion, respuesta2, respuesta2_comprobacion, respuesta3, respuesta3_comprobacion, respuesta4, respuesta4_comprobacion FROM preguntas WHERE id = '".$_POST['id_pregunta']."'");
		  $check_id_pregunta = mysql_fetch_array($sql1);
	?>
       <form action="comprobar_modificar_pregunta.php" method="post">

       <label>Pregunta:</label><br>
       <textarea name="pregunta"><?=$check_id_pregunta[0]?>
       </textarea>
       <br><br>
       <label>Imagen (Escribir URL completa):</label><br>
       <input name="imagen" type="text" value="<?=$check_id_pregunta[1]?>
       ">
       <br><br>

       <table width="641" border="1" cellspacing="0" cellpadding="0">
         <tbody>
           <tr>
             <td width="320" height="135">
       <center><label>Respuesta 1:</label><br>
       <input type="text" name="respuesta1" value="<?=$check_id_pregunta[2]?>"/><br><br>
       <label>¿Es correcta? 1: Sí, 0: No:</label><br>
       <input type="text" name="respuesta1_comprobacion" value="<?=$check_id_pregunta[3]?>"/></center>
             </td>
             <td width="321">
       <center><label>Respuesta 2:</label><br>
       <input type="text" name="respuesta2" value="<?=$check_id_pregunta[4]?>"/><br><br>
       <label>¿Es correcta? 1: Sí, 0: No:</label><br>
       <input type="text" name="respuesta2_comprobacion" value="<?=$check_id_pregunta[5]?>"/></center>
             </td>
           </tr>
           <tr>
             <td height="157">
       <center><label>Respuesta 3:</label><br>
       <input type="text" name="respuesta3" value="<?=$check_id_pregunta[6]?>"/><br><br>
       <label>¿Es correcta? 1: Sí, 0: No:</label><br>
       <input type="text" name="respuesta3_comprobacion" value="<?=$check_id_pregunta[7]?>"/></center>
             </td>
             <td>
       <center><label>Respuesta 4:</label><br>
       <input type="text" name="respuesta4" value="<?=$check_id_pregunta[8]?>"/><br><br>
       <label>¿Es correcta? 1: Sí, 0: No:</label><br>
       <input type="text" name="respuesta4_comprobacion" value="<?=$check_id_pregunta[9]?>"/></center>
             </td>
           </tr>
         </tbody>
       </table>
       <br><br><br>
       
       <input type="hidden" name="id_cuestionario" value="<?=$_POST['id_cuestionario']?>" />
       <input type="hidden" name="id_pregunta" value="<?=$_POST['id_pregunta']?>" />
       <input type="submit" name="enviar" value="Modificar pregunta" />
       </form>
    <?php
	}
	?>
    </tr>
    <tr>
      <td height="152"></td>
    </tr>
  </tbody>
</table>
</body>
</html>
<?php
ob_end_flush();
?>