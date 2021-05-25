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

 Route ::get('variables',  function(){
     $mensaje = 27;

     /*funcion nativa php, laravel: analizar el contenido de una
     varible: tipo de dato, datos contenidos*/
     var_dump($mensaje);

     echo "<hr/>";
     $mensaje = "Hola Mundo :)";
     var_dump($mensaje);
 });

 Route::get('arreglos', function () {
     //Definir un arreglo en php
     //Tamaño: numero de elementos del arreglo

     $estudiante = [ "Juan","Maria","Leonard","Paola" ];
     echo "<pre>";
     print_r($estudiante);
     echo "<hr/>";
     echo "<br/>";
     var_dump($estudiante);
 });

 Route::get('paises', function () {

    $paises=[
        "Colombia" => [

            "capital" => "Bogotá",
            "moneda" => "Peso",
            "población" => 51
        ],
        "Perú" => [

            "capital" => "Lima",
            "moneda" => "Sol",
            "población" => 32.51
        ],
        "Paraguay"=> [

            "capital" => "Asunción",
            "moneda" => "Guaraní",
            "población" => 7

        ],
        "Brasil"=>[
            "capital" => "Brasilia",
            "moneda" => "Real brasileño",
            "población" => 211
        ]
    ];

    // mostrar la vista de paises
    //enviar vista paises
    return view('paises')-> with("paises", $paises);
}


 );

Route::get('mostrar_formulario' , 'MetabucadorController@mostrar_formulario');

Route::post('buscar_termino', 'MetabucadorController@buscar_termino');
