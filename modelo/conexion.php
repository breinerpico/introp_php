<?php
    //  script para crear una conexion con la BD

    //parametros requeridos para la conexion la BD

    // parametros BD local 
    /*define('USER','root'); //crea la constante USER con valor 'root'
    define('PW','');
    define('HOST', 'localhost');
    define('BD', 'Empresa');*/

    // parametros BD remota (infinityfree)
    define('USER','if0_38542088'); //crea la constante USER con valor 'root'
    define('PW','breinerpico03');
    define('HOST', 'sql100.infinityfree.com');
    define('BD', 'if0_38542088_empresa');

    // conexion con la BD

    $conexion = mysqli_connect(HOST,USER,PW,BD);

    // establecer conjunto de caracteres para el hosting 
    mysqli_set_charset($conexion, "utf8mb4");

    // verificar la conexion con la BD
    if(!$conexion)
    {
         die("la conexion con la BD fallo: " + mysqli_error($conexion));
         exit();
    }
    else
    {
        die("conexion a la BD exitosa!");
    }
?>