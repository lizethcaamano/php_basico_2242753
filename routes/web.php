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
