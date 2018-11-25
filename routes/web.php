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

Route::get('foreach',['as' => 'foreach',function () {
    $opciones = [
        "Opcion 1",
        "Opción 2",
        "Opción 3",
        "Opción 4"
    ];
    return view('foreach',compact('opciones'));
}]);

Route::get('forelse',['as' => 'forelse',function () {
    //array vacio para probar el forelse
    $opciones = [

    ];
    return view('forelse',compact('opciones'));
}]);

Route::get('if',['as' => 'if',function () {
    //array vacio para probar el forelse
    $opciones = [
        'Opcion 1',
        'Opcion 2'
    ];
    return view('if',compact('opciones'));
}]);
