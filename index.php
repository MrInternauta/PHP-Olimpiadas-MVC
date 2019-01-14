
<?php

require_once 'autoload.php';


if(isset($_GET['c'])) {
    $nombre_controlador = $_GET['c'].'Controller';
    
}else{
    header('Location: index.php?c=&a=home');
}


if(class_exists($nombre_controlador)){
   
    $controlador = new $nombre_controlador();
    if(isset($_GET['a'])  && method_exists($controlador,$_GET['a'] )){
        $action = $_GET['a'];
 
        require_once 'views/layout/header-admin.php';
        require_once 'views/layout/carousel.php';
        $controlador->$action();
       
    }else{

            header('Location: index.php?c=Home&a=home');
    }


}else{
    header('Location: index.php?c=Home&a=home');
}





// Footer

/**
 * 
 * Errores
 * 
 * 
 */
require_once 'views/layout/footer.php';
?>