<?php
date_default_timezone_set('America/Los_Angeles');
//borrar  en class
// en class.configforos borrar los temas asociado al foro




if(isset($_GET['view'])){

    if(file_exists('core/controllers/'.strtolower($_GET['view']).'Controller.php')){

        include 'core/controllers/'.strtolower($_GET['view']).'Controller.php';
    }else{
        include 'core/controllers/errorController.php';
    }

}else{
    include 'core/controllers/indexController.php';
}



?>
