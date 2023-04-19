<?php
class Conectar{
    static public function conexion(){
        $bd =new PDO("mysql:host=127.0.0.1:33065; dbname=proyecto","root","");
        $bd -> exec("set names latin1");
        return $bd;
    }
}

?>