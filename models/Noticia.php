<?php
    class Noticia extends Conectar{

        public function get_Noticia_principal(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_noticias WHERE noti_Import = 1 and est = 1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql ->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_Noticia(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_noticias WHERE est = 1 ";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql ->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_Etiqueta($id_not){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM etiquetas WHERE id_not = ? and est = 1";
            $sql=$conectar->prepare($sql);
            $sql -> bindValue(1, $id_not);
            $sql->execute();
            return $resultado=$sql ->fetchAll(PDO::FETCH_ASSOC);
        }
    }




?>