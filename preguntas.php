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
      <td height="313" align="center" valign="top"><h1>Panel de administración</h1><br><br>
        <table width="688" border="1" cellspacing="0" cellpadding="0">
          <tbody>
            <tr align="center" valign="middle" class="cabecera">
              <td width="48" align="center" valign="middle"><strong>ID</strong></td>
              <td width="429"><strong>Nombre de la pregunta</strong></td>
              <td colspan="2" align="center" valign="middle"><strong>Acciones<!-- <a href="ver.php">Ver</a> | <a href="modificar.php">Modificar</a> | <a href="borrar.php">Borrar</a> --></strong></td>
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
              <td width="48" align="center" valign="middle"><?=$check_pregunta[0]?></td>
              <td width="429"><?=$check_pregunta[5]?></td>
              <td width="108" align="center" valign="middle">
              
              <form action="modificar_pregunta.php" method="post">
              <input type="hidden" name="id_pregunta" value="<?=$check_pregunta[0]?>" />
              <input type="hidden" name="id_cuestionario" value="<?=$_GET['id_cuestionario']?>" />
              <input type="submit" name="enviar" value="Modificar" />
              </form>

              </td>
              <td width="93" align="center" valign="middle">
              
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
