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
 //ALTERNATIVA II ? en vez de tener placeHOLDERS
 $consulta =$baseDeDatos->prepare("INSERT into usuarios
 values(default,?,?,?, null, null)");
 $consulta->bindValue("1", $nombre,PDO::PARAM_STR);
 $consulta->bindValue("2", $apellido,PDO::PARAM_STR);
 $consulta->bindValue("3", $email,PDO::PARAM_STR);
 $consulta->bindValue("#", $id,PDO::PARAM_INT);
 $cosulta->excecute();
 //ALTERNATIVA III bindParam por bindValue, puede cambiar si $variable cambia
 //entre el binding y el excecute
 $consulta =$baseDeDatos->prepare("INSERT into usuarios
 values(default,?,?,?, null, null)");
 $consulta->bindParam("1", $nombre,PDO::PARAM_STR);
 $consulta->bindParam("2", $apellido,PDO::PARAM_STR);
 $consulta->bindParam("3", $email,PDO::PARAM_STR);
 $consulta->bindParam("#", $id,PDO::PARAM_INT);
 $cosulta->excecute();
 $consulta =$baseDeDatos->prepare("INSERT into usuarios
 values(default,?,?,?, null, null)");
 
 $cosulta->excecute();

 //ALTERNATIVA IV no sar bindings
 $consulta =$baseDeDatos->prepare("INSERT into usuarios
 values(default,:nombre,:apellido, :email, null, null)");
 $cosulta->excecute([
     ":nombre"=>$nombre,
     ":apellido"=>$apellido
 ]);


