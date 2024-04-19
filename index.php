<?php 
require_once('autoload.php');
require_once('views/layout/header.php');
require_once('config/Database.php');

if(isset($_GET['class'])){
    $class = $_GET['class'] . 'Controller';
}else{
    echo "no se esta pasando ninguna clase por la url";
}

if(isset($class) && class_exists($class)){
    $object = new $class();

    if(isset($_GET['method']) && method_exists($object, $_GET['method'])){
        $method = $_GET['method'];
        $object->$method();

    }else{
        echo "no se esta pasando ningun metodo o el metodo pasado no existe";
    }

}else{
    echo "la clase pasada no existe ";
}


 
 
require_once('views/layout/footer.php');
?>