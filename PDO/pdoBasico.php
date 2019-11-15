<?php

//Abrir la conexion
$dns  = "mysql: dbname=movies_db;host=127.0.0.1;port=3306";
$usuario = "root";
$pass = "root";
$opt =[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
//Cerrar la conexion
//$db= null;

//Manejo de excepciones
try {
    $baseDeDatos = new PDO($dsn,$usuario,$pass, $opt);
    //COnfigurar para ver errores SQL
    $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    //funciones asociadas a un objeto se ejecutan con una flecha $e->
    //var_dump($e->get_message());
    echo "OH NO HUBO UN ERROR";
    echo " ", $e->getMessage();
    exit;
}

echo "La base de Datos funciona bien";