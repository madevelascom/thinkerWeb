<?php
ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thinker! - Cuestionario</title>
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
		  $sql1 = mysql_query("SELECT nombre, aleatorio, preguntas_aleatorias FROM cuestionarios WHERE id = '".$_GET['id_cuestionario']."'");
		  $check_id_cuestionario = mysql_fetch_array($sql1);
	?>
       <form action="comprobar_modificar_cuestionario.php" method="post">

       <label>Nombre del cuestionario:</label><br>
       <input type="text" name="nombre_del_cuestionario" value="<?=$check_id_cuestionario[0]?>" /><br><br><br>
       <label>¿Preguntas aleatorias? 1: Sí, 0: No:</label><br>
       <input type="text" name="aleatorias" value="<?=$check_id_cuestionario[1]?>" /><br><br>
       <label>Número de preguntas aleatorias</label><br>
       <input type="text" name="preguntas_aleatorias" value="<?=$check_id_cuestionario[2]?>" /><br><br>
       
       <input type="hidden" name="id_cuestionario" value="<?=$_GET['id_cuestionario']?>" />
       <input type="submit" name="enviar" value="Modificar cuestionario" />
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