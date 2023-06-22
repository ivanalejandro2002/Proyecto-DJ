<?php


class Conexion{


    public static function ConexionBD(){

        $servidor = "localhost";
        $usuario ="root";
        $clave ="";
        $BaseDeDatos ="serv_dj";

        try{
            
            $conn = new PDO("mysql:host=$servidor;port=3306;dbname=$BaseDeDatos",$usuario,$clave);
            echo "Se logro la conexion";
        }
        catch(PDOException $pe){
            die ("No se logro conectar a la base da datos".$pe->getMessage());
        }
        return $conn;

    }


}




?>