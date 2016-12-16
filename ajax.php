<?php

if($_POST){

    require 'core/core.php';



    switch (isset($_GET['mode']) ? $_GET['mode'] : null ) {
        case 'validaciones':

            require('core/bin/ajax/goValidaciones.php');
                break;

            case 'validacionesdeldia':

                require('core/bin/ajax/goValidacionesDelDia.php');


            break;


    }



}  else {

    header('location: index.php');

}


?>
