<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }

?>

</DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>Pagina del usuario</title>
</head>
<body>
    <h1>Pagina del usuario</h>
    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>
</body>
</html>