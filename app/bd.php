<?php
$servidor="localhost"; 
$baseDeDatos="app";
$usuario="root";
$contrasenia="root";

try{
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario,$contrasenia);

}
catch(Exception $ex){
    echo $ex->getMessage();

}

?> 