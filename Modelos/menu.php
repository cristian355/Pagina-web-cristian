<?php
class Menu extends Conectar{
    public function option_Menu(){
        $conectar = parent::conexion();
        $sql="SELECT * FROM menu";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>