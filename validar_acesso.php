<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];



    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";


    $objDb = new db();
    $link = $objDb->conecta_mysql();


    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id);


        if(isset($dados_usuario['usuario'])){
            echo 'existe';
        } else {
            echo 'nao existe';
        }

        } else{
            echo 'Erro';
        }


?>