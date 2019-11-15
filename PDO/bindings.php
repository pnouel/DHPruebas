<?php
include("pdoBasico.php");


$nombre ="Dario";
$apellido = "Srungunga";
$email="email@email.com";
$consulta =$baseDeDatos->prepare("INSERT into usuarios
 values(default,'$nombre','$apellido', '$email, null, null)");
 $cosulta->excecute();

 //pdo tiene una capa de seguridad 
 //reemplazamos las variables por placeholder
 //$consulta va a comvertirse en esto.
 //Con esto evitamos SQL injections.

 $consulta =$baseDeDatos->prepare("INSERT into usuarios
 values(default,:nombre,:apellido, :email, null, null)");
 $consulta->bindValue(":nombre", $nombre,PDO::PARAM_STR);
 $consulta->bindValue(":apellido", $apellido,PDO::PARAM_STR);
 $consulta->bindValue(":email", $email,PDO::PARAM_STR);
 $consulta->bindValue(":id", $id,PDO::PARAM_INT);
 //
 
 $cosulta->excecute();
 
