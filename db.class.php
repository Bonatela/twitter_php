<?php


   class db {


      //host
      private $host = 'localhost';


      //usuario
      private $usuario = 'root';
      

      //senha
      private $senha = '';


      //banco
      private $database = 'tww';



         public function conecta_mysql(){

            //cria a conecao
            $con = mysqli_connect($this->$host, $this->$usuario, $this->$senha, $this->$database);

            
            //utf8
            mysqli_set_charset($con, 'utf-8');
         

               if(mysqli_connect_errno()){
                  echo 'deu ruim gurizada:  '.mysqli_connect_error();
               }

               return $con;
         }

   }



?>