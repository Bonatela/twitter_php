<?php

   require_once('db.class.php');

   echo $_POST['usuario'];

   echo '<br>';

   echo $_POST['email'];

   echo '<br>';

   echo $_POST['senha'];


   $objdb = new db();
   $link = $objdb->conecta_mysql;

?>