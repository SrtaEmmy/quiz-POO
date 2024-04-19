<?php 
 require_once('models/Tema.php');

  class TemaController{
    
    public function index(){
        
        $tema = new Tema();
        $temas = $tema->getAll();

        require_once('views/temas/temas.php');
    }

    public function get_tema(){
        if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['id_tema'])){

            session_start();
            $_SESSION['id_tema'] = $_POST['id_tema'];

            header('Location: index.php?class=pregunta&method=index');
        }
    }


  }
 
 
?>