<?php

use Illuminate\Support\Facades\Route;

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

Route::get('variables', function(){
    $mensaje = 20;
    // funcion nativa dee php : analizar el contenido de
    // variable: tipo de dato, datos contenidos
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Hola 2242753";
    var_dump($mensaje);
} );

route::get('arreglos' , function(){
    //definir un arreglo en php
    // Tamaño: Número de elementos del arreglos
    // Tamaño del arreglo estudiante
   $estudiantes = ["A" => "Ana" ,
                    2 =>"María" ,
                    "J" => "Jorge" ];
   echo "<pre>";
   print_r($estudiantes);
   echo "</pre>";

});

Route::get('paises', function () {

    $paises = [
    "Colombia" =>[
        "capital" => "Bogotá",
        "Moneda" => "Peso",
        "Población" => 51

    ],
    "Peru" => [
        "capital" => "Lima",
        "Moneda" => "Sol",
        "Población" => 33.19

    ],
    "Paraguay" =>[
        "capital" => "Asunción",
        "Moneda" => "Guarani",
        "Población" => 7

    ]];

    //recorrer el arreglo de paises
    foreach ($paises as $nombre => $pais){
        echo "<h1> $nombre </h1>";
        echo"<pre>";
        print_r($pais);
        echo"</pre>";
        echo"<hr/>";
    }

});
