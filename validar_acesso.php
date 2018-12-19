<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];



    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";


    $objDb = new db();
    $link = $objDb->conecta_mysql();


    mysqli_query($link,$sql);



?>