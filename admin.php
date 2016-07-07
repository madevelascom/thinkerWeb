<?php
ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thinker! - Administración</title>
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
    ?>
       <form action="comprobar_micuenta.php" method="post">
       <label>Nombre:</label><br>
       <input type="text" name="nombre" /><br><br>
       <label>Contraseña:</label><br>
       <input type="password" name="password" /><br><br>
       <input type="submit" name="enviar" value="Acceder" />
       </form>
    <?php
	}
	else
	{
	?>
       <br><br><a href="cuestionarios.php">Cuestionarios</a>
       <br>
       <br>
       <br><br><a href="cerrarsesion.php">Cerrar sesión</a></td>
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