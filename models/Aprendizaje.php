<?php
    class Aprendizaje extends Conectar{

        public function get_Aprendizaje(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_aprendizaje WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql ->fetchAll(PDO::FETCH_ASSOC);
        }
    }




?>