<?php
include("pdoBasico.php");
// se genera una consulta
//Podemos traer los datos a insertar en a query de superGolbales

$nombre=
$apellido=
$email = $_POST["email"];

$consulta = $baseDeDatos->prepare("INSERT into usuarios values(default,
'bran','stark','mail', null, null)");
$consulta->execute();