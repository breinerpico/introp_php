<?php
    session_start();

    session_urset();

    session_destroy();

    header("location: ../index.php");
?>