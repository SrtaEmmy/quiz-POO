<?php 
 
class Tema{
    public $id;
    public $nombre;
    public $db;

    function __construct(){
        $this->db = Database::connect();
    }
    

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getAll(){
        $sql = "SELECT * FROM temas";
        $temas = $this->db->query($sql);

        return $temas;
    }

    public function play(){
        session_start();
        $id_tema = $_SESSION['id_tema'] = $this->getId();
        return $id_tema;
    }

 
}  
 
 
?>