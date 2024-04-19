<?php 
 
session_start();  
$correctas = $_SESSION['score']; 
$incorrectas = $_SESSION['total_preguntas'] - $correctas;
 
?>

<h1>Resultados</h1>
<a href="index.php?class=tema&method=index">Inicio</a> <br>
Correctas: <?php echo $correctas; ?> <br>
Incorrectas: <?php echo $incorrectas; ?>

