<?php 
 
class Pregunta{
    public $id;
    public $id_tema;
    public $pregunta;
    public $opcion_a;
    public $opcion_b;
    public $opcion_c;
    public $db;


    public function __construct(){
        $this->db = Database::connect();
    }


    /**
     * Get the value of opcion_c
     */ 
    public function getOpcion_c()
    {
        return $this->opcion_c;
    }

    /**
     * Set the value of opcion_c
     *
     * @return  self
     */ 
    public function setOpcion_c($opcion_c)
    {
        $this->opcion_c = $opcion_c;

        return $this;
    }

    /**
     * Get the value of opcion_b
     */ 
    public function getOpcion_b()
    {
        return $this->opcion_b;
    }

    /**
     * Set the value of opcion_b
     *
     * @return  self
     */ 
    public function setOpcion_b($opcion_b)
    {
        $this->opcion_b = $opcion_b;

        return $this;
    }

    /**
     * Get the value of opcion_a
     */ 
    public function getOpcion_a()
    {
        return $this->opcion_a;
    }

    /**
     * Set the value of opcion_a
     *
     * @return  self
     */ 
    public function setOpcion_a($opcion_a)
    {
        $this->opcion_a = $opcion_a;

        return $this;
    }

    /**
     * Get the value of pregunta
     */ 
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set the value of pregunta
     *
     * @return  self
     */ 
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get the value of id_tema
     */ 
    public function getId_tema()
    {
        return $this->id_tema;
    }

    /**
     * Set the value of id_tema
     *
     * @return  self
     */ 
    public function setId_tema($id_tema)
    {
        $this->id_tema = $id_tema;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function get_preguntas_by_tema(){
        $sql = "SELECT pregunta, opcion_a, opcion_b, opcion_c, correcta FROM preguntas WHERE id_tema = '{$this->getId_tema()}'";
        $result = $this->db->query($sql);

        $preguntas = array();
        while ($pregunta = $result->fetch_object()) {
          $preguntas[] = $pregunta;
        }
        return $preguntas;
    }





}  
 
 
?>