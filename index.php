<?php

/* 
 * Creador de curriculim vitaes by Eneko
 */
require_once("db/db.php");


$select = $mysqli->query("SELECT * FROM usuario where id = 1;");

 $sql = "SELECT * FROM usuario where id = 1;";

        $result = $mysqli->query($sql);

        $fila = $result->fetch_assoc();
        
        
        
        
echo "<pre>".print_r($fila, 1)."</pre>";


echo"hola";