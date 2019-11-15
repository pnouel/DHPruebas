<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function(){
    return "Eso es una prueba de ruta";
});


// si quiero que solo responda por POST

// Route::POST('/inicio', function(){
//     return "Eso es una prueba de ruta";
// });

//Prueba http://localhost:8000/inicio


//Recibe->ruta del sitio
// // ->funcion anonima que permite darle funcionalidad
// // retorna -> lo que le de la gana

//Parametizable
Route::get("/peliculas/{id}", function($id){
    return "Info Pelicula $id";
});
// mas de un parametro
Route::get("/peliculas/{id}/{param}", function($id, $param){
    return "Info Pelicula $id $param";
});
//Parametros opcionales
Route::get("/peliculasD/{id}/{param?}", function($id,$param= "No ingresarn una verga"){
    return "Info Pelicula $id $param";
});

Route::get("/ruleta/{numero}", function($numero){
    return "Apuesta al numero $numero";
});

//Con Expresiones regulares
Route::get('/ruletas/{numero}', function($numero)
{
     return "Apuesta al numero $numero";
})
->where('numero', '[1-9]+');
//con furioso if
Route::get('/ruletass/{numero}', function($numero)
{
    if ($numero > 0 && $numero < 36) {
        return "Apuesta al numero $numero";
    } else {
        return "NOse";
    }
});

//Enlazar visatas y rutas
Route::get('/vista', function () {
    return view("detalleVista");
});
//Compartir variables con la vista
Route::get('/vista/{param}', function ($param) {
  //vac es variables a compartir
  $vac = compact("param");//string. Genera un array
    return view("detalleVista");
});
