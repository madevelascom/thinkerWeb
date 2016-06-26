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
<table align="center" width="993" border="0" cellspacing="0" cellpadding="0">
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
       <form action="comprobar_anadir_pregunta.php" method="post">

       <label>Pregunta:</label><br>
       <input type="text" name="pregunta" /><br><br>
       <label>Imagen (Escribir URL completa):</label><br>
       <input type="text" name="imagen" /><br><br>

       <table width="641" border="1" cellspacing="0" cellpadding="0">
         <tbody>
           <tr>
             <td width="320" height="135">
       <center><label>Respuesta 1:</label><br>
       <input type="text" name="respuesta1" /><br><br>
       <label>¿Es correcta? 1: Sí, 0: No:</label><br>
       <input type="text" name="respuesta1_comprobacion" /></center>
             </td>
             <td width="321">
       <center><label>Respuesta 2:</label><br>
       <input type="text" name="respuesta2" /><br><br>
       <label>¿Es correcta? 1: Sí, 0: No:</label><br>
       <input type="text" name="respuesta2_comprobacion" /></center>
             </td>
           </tr>
           <tr>
             <td height="157">
       <center><label>Respuesta 3:</label><br>
       <input type="text" name="respuesta3" /><br><br>
       <label>¿Es correcta? 1: Sí, 0: No:</label><br>
       <input type="text" name="respuesta3_comprobacion" /></center>
             </td>
             <td>
       <center><label>Respuesta 4:</label><br>
       <input type="text" name="respuesta4" /><br><br>
       <label>¿Es correcta? 1: Sí, 0: No:</label><br>
       <input type="text" name="respuesta4_comprobacion" /></center>
             </td>
           </tr>
         </tbody>
       </table>
       <br><br><br>
       
       <input type="hidden" name="id_cuestionario" value="<?=$_GET['id_cuestionario']?>" />
       <input type="submit" name="enviar" value="Añadir pregunta" />
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