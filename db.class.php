<?php


   class db {


      
      
      //host
      private $host = '127.0.0.1';


      //banco
      private $database = 'tww';

      
      //usuario
      private $usuario = 'root';
      

      //senha
      private $senha = '';


         public function conecta_mysql(){

            //cria a conecao
            $con = mysqli_cnnect($this->$host, $this->$usuario, $this->$senha, $this->$database);

            //utf8
            mysqli_set_charset($con, 'utf-8');
         

               if(mysqli_connect_errno()){
                  echo 'deu ruim gurizada:  '.mysqli_connect_error();
               }

               return $con;
         }

   }



?>