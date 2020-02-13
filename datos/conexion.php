<?php 
    class Conexion{

        /**
         * conexion a la base datos atraves de PDO
         * @return conexion PDO 
         */
        public static function conectar(){

            try{

                $cn=new PDO("mysql:host=localhost;dbname=LoginPhp","root","");
                return $cn;
            }catch(PDOException $ex){
            die ($ex->getMessage());

            }
        }



    }
   

?>