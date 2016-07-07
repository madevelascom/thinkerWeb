<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thinker! - Cuestionarios</title>
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
        <p>Para pasar el link del cuestionario, deberás poner:</p>
        <p>127.0.0.1/thinker/index.php?id_cuestionario=ID<br>
          <br>
        </p>
        <table width="675" border="1" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td width="48"><div align="center"><strong>ID</strong></div></td>
              <td width="330"><div align="center"><strong>Nombre del cuestionario</strong></div></td>
              <td width="289"><div align="center"><strong>Acciones<!-- <a href="ver.php">Ver</a> | <a href="modificar.php">Modificar</a> | <a href="borrar.php">Borrar</a> --></strong></div></td>
            </tr>
 <?php
    include('conexion.php');
	mysql_set_charset('utf8');
	session_start();
	
	$sql_cuestionario = mysql_query("SELECT * FROM cuestionarios");
	$check_numero_filas = mysql_num_rows($sql_cuestionario);
	
	for ($i = 0; $i < $check_numero_filas; $i++)
	{
		$check_cuestionario = mysql_fetch_array($sql_cuestionario);
		
		?>
            <tr>
              <td width="48"><div align="center">
                <?=$check_cuestionario[0]?>
              </div></td>
              <td width="330"><?=$check_cuestionario[1]?></td>
              <td width="289"><div align="center"><a href="preguntas.php?id_cuestionario=<?=$check_cuestionario[0]?>">Preguntas</a> | <a href="modificar_cuestionario.php?id_cuestionario=<?=$check_cuestionario[0]?>">Modificar</a> | <a href="borrar_cuestionario.php?id_cuestionario=<?=$check_cuestionario[0]?>">Borrar</a></div></td>
            </tr>
        <?php
	}
	?>
            
          </tbody>
      </table><br><br>
      <a href="crear_cuestionario.php">Crear cuestionario</a>
      </td>
    </tr>
    <tr>
      <td height="152"></td>
    </tr>
  </tbody>
</table>
</body>
</html>
