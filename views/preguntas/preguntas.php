<?php 
if(session_status()==PHP_SESSION_NONE){
    session_start();
}


$pregunta_actual = $_SESSION['pregunta_actual'];
?>

<h2><?php echo $preguntas[$pregunta_actual]->pregunta; ?></h2>

<form action="index.php?class=pregunta&method=index" method="post">
    <p><?php echo $preguntas[$pregunta_actual]->opcion_a ?></p>
    <input type="radio" name="answer" value="a">

    <p><?php echo $preguntas[$pregunta_actual]->opcion_b ?></p>
    <input type="radio" name="answer" value="b">

    <p><?php echo $preguntas[$pregunta_actual]->opcion_c ?></p>
    <input type="radio" name="answer" value="c">

    <input type="submit" name="next">
</form>





