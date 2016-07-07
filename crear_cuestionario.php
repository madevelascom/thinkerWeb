<?php
ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thinker! - Crear cuestionario</title>
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
	?>
       <form action="comprobar_cuestionario.php" method="post">
         <p>
           <label>Nombre del cuestionario:</label>
           <br>
           <input type="text" name="nombre_del_cuestionario" /><br><br><br>
           <label>¿Preguntas aleatorias? 1: Sí, 0: No:</label>
           <br>
           <input type="text" value="0" name="aleatorias" /><br>
         </p>
         <p><br>
           <label>Número de preguntas aleatorias</label>
           <br>
           <input type="text" value="0" name="preguntas_aleatorias" /><br>
         </p>
         <p><br>
           
           <!-- <label>Nombre del cuestionario:</label><br>
       <input type="text" name="nombre_del_cuestionario" /><br><br><br>
       <label>Pregunta 1:</label><br>
       <input type="text" name="pregunta1" /><br><br>
       <label>Respuesta 1:</label><br>
       <input type="text" name="respuesta1" /><br><br>
       <label>Respuesta 2:</label><br>
       <input type="text" name="respuesta2" /><br><br>
       <label>Respuesta 3:</label><br>
       <input type="text" name="respuesta3" /><br><br>
       <label>Respuesta 4:</label><br>
       <input type="text" name="respuesta4" /><br><br>-->
           
           <input type="submit" name="enviar" value="Crear cuestionario" />
         </p>
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