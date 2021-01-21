<?php

//Llamada al modelo
require_once("app/modelos/usuarios_model.php");


class usuarios_controller{
    
    function view($id){
        
        $usu = new usuarios_model();
        $datos = $usu->showUser($id);
        
        echo "<pre>".print_r($datos, 1)."</pre>";;
    }
}


