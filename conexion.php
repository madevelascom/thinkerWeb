<?php
    $host_db = "127.0.0.1";
    $usuario_db = "root";
    $clave_db = "rubik";
    $nombre_db = "thinker";

    $conexion = mysql_connect($host_db, $usuario_db, $clave_db);
    mysql_select_db($nombre_db);
?>