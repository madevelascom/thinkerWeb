<?php
   session_start();
      include('conexion.php');
      if (isset($_POST['enviar'])) 
	  {
         if (empty($_POST['nombre'])) 
		 {
            echo "El campo 'Nombre' está en blanco. Por favor, introdúcelo. <a href='javascript:history.back();'>Reintentar</a>";
         }
         elseif (empty($_POST['password'])) 
		 {
            echo "El campo 'Contraseña' está en blanco. Por favor, introdúcelo. <a href='javascript:history.back();'>Reintentar</a>";
         }
		 else 
		 {
            $nombre = mysql_real_escape_string($_POST['nombre']);
            $password = mysql_real_escape_string($_POST['password']);

            $sql = mysql_query("SELECT id, nombre, password, admin FROM usuarios WHERE nombre = '".$nombre."' AND password = '".$password."'");
			$check = mysql_fetch_array($sql);
			
            if ($check[3] == 1) 
			{
                $_SESSION['id'] = $check[0];
				$_SESSION['nombre'] = $check[1];
                header("Location: admin.php");
            }
			else 
			{
            ?>
                No eres administrador. <a href="admin.php">Reintentar</a>
            <?php
            }
        }
    }
	else 
	{
        header("Location: admin.php");
    }
?> 