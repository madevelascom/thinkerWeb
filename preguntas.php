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
      <td height="313" align="center" valign="top"><h1>Panel de administración</h1><br><br>
        <table width="688" border="1" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td width="48">ID</td>
              <td width="429">Nombre de la pregunta</td>
              <td colspan="2">Acciones<!-- <a href="ver.php">Ver</a> | <a href="modificar.php">Modificar</a> | <a href="borrar.php">Borrar</a> --></td>
            </tr>
 <?php
    include('conexion.php');
	mysql_set_charset('utf8');
	session_start();
	
	$sql_pregunta = mysql_query("SELECT * FROM preguntas WHERE id_cuestionario = '".$_GET['id_cuestionario']."'");
	$check_numero_filas = mysql_num_rows($sql_pregunta);
	
	for ($i = 0; $i < $check_numero_filas; $i++)
	{
		$check_pregunta = mysql_fetch_array($sql_pregunta);
		
		?>
            <tr>
              <td width="48"><?=$check_pregunta[0]?></td>
              <td width="429"><?=$check_pregunta[5]?></td>
              <td width="108">
              
              <form action="modificar_pregunta.php" method="post">
              <input type="hidden" name="id_pregunta" value="<?=$check_pregunta[0]?>" />
              <input type="hidden" name="id_cuestionario" value="<?=$_GET['id_cuestionario']?>" />
              <input type="submit" name="enviar" value="Modificar" />
              </form>

              </td>
              <td width="93">
              
              <form action="borrar_pregunta.php" method="post">
              <input type="hidden" name="id_pregunta" value="<?=$check_pregunta[0]?>" />
              <input type="hidden" name="id_cuestionario" value="<?=$_GET['id_cuestionario']?>" />
              <input type="submit" name="enviar" value="Borrar" />
              </form>
              
              </td>
            </tr>
        <?php
	}
	?>
            
          </tbody>
      </table><br><br>
      <a href="cuestionarios.php">Volver atrás</a> | <a href="anadir_pregunta.php?id_cuestionario=<?=$_GET['id_cuestionario']?>">Añadir pregunta</a>
      </td>
    </tr>
    <tr>
      <td height="152"></td>
    </tr>
  </tbody>
</table>
</body>
</html>
