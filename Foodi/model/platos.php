<?php
class Platos extends Conectar
{
    private $db;
    private $platos;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->platos = array();
    }
    public function obtener_platos()
    {
        $sql = "SELECT * FROM plates";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC); 
    }

}
