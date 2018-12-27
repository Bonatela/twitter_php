<?php

        require_once('db.class.php');


        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cnpj = $_POST['cnpj'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];



        $objDb = new db();
        $link = $objDb->conecta_mysql();

        $sql = "INSERT INTO usuarios (usuario, email, telefone, cnpj, cidade, uf, cep, endereco, senha) VALUES ('$usuario', '$email', '$telefone', '$cnpj', '$cidade', '$uf', '$cep', '$endereco', '$senha')";

        //executar a query
        if(mysqli_query($link, $sql)){
            echo "Usuário registrado com sucesso!";
        }else{
            echo "Erro ao registrar o usuário!";
        }

?>