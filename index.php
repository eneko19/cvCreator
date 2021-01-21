<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* 
 * Creador de curriculim vitaes by Eneko
 */
require_once("db/db.php");
require_once("app/controladores/usuarios_controller.php");

$usu = new usuarios_controller();

$datos = $usu->view(1);

echo "<pre>".print_r($datos, 1)."</pre>";die('hola');



die("FIN");
