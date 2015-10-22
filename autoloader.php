<?php 

function __autoload($class_name){
    
    require 'class/'.$class_name.'.php';

}
    //echo "This file full path is '" . __DIR__ . "'.\n";
//
//    require ('./controllers/controllerRoom.php');
//    require ('./models/modelRoom.php');
//    require ('./models/connection.php');
//    require ('./views/viewrooms.php');


?>
