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

//Recuperando Informacion
//Trae un array con posiciones = a resultados mas arrays en cada posicion con
//posiciones de cada columna
// fetchALl no es recomendable ya que si trae todos los resultados no es performante



$consulta = $baseDeDatos ->prepare("SELECT * FROM movies  ");// puedo ordenar
$consulta -> execute();
$peliculas = $consulta->fetchAll(PDO::FETCH_ASSOC);// Esto trae soloel ombre de la columna y el dato, no repite como lo hace por default
$peliculas = $consulta->fetch(PDO::FETCH_ASSOC);// trae el primer resultado, luego consulta siguiente pelicula
//va trayendo de a uno  hasta que no encuentra mas peliculas, muestra nombre
while ($peliculas !=null){
    echo $pelicula["title"];
    echo "<br>";
    $peliculas = $consulta->fetch(PDO::FETCH_ASSOC);
}
//vamos a imprimir los datos que trae. 

foreach ($peliculas as $pelicula) {
    echo $pelicula["title"];//aasocia directamente el nombre de la columna
}
var_dump($peliculas);