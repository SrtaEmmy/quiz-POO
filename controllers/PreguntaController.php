<?php 
require_once('models/Pregunta.php');
 
class PreguntaController{

    public function index(){
        session_start();

        $pregunta = new Pregunta();
        $pregunta->setId_tema($_SESSION['id_tema']);
        $preguntas = $pregunta->get_preguntas_by_tema();
        $_SESSION['total_preguntas'] = count($preguntas);

        
        if(!isset($_POST['next'])){
            $_SESSION['pregunta_actual'] = 0;
            $_SESSION['score'] = 0;

            $correcta =  $preguntas[$_SESSION['pregunta_actual']]->correcta;
            echo 'la respuesta es: '. $correcta;
            
        }else{

            $respuesta_usuario = $_POST['answer'];
            echo '<br/>anterior, usuario: '.$respuesta_usuario . "<br/>";

            $correcta = $preguntas[$_SESSION['pregunta_actual']]->correcta;
            echo 'la respuesta era: '. $correcta;
            if($respuesta_usuario === $correcta){
                $_SESSION['score']++; // Aumentar el puntaje si la respuesta es correcta
                echo '<br/>score: '. $_SESSION['score'];
            }

            if($_SESSION['pregunta_actual'] < $_SESSION['total_preguntas']-1){



                $_SESSION['pregunta_actual']++;


            
            }else{
                
                echo "final de juego. Redirigir a resultados";
                header('Location: views/resultados/resultado.php');
            }
        }

        require_once('views/preguntas/preguntas.php');
    }


    
}  
 
 
?>