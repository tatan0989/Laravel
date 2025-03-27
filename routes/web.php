<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* return view('welcome'); */
    return "Bienvenido a la pagina principal";
});
Route::get('cursos', function(){
    return"Bienvenido a la pagina cursos";
});
//cursos/create
Route:: get('cursos/create', function (){
    return "En esta pagina podra crear un curso "; 
 });
 
/* Route::get('cursos/{curso}', function ($curso){
    return"Bienvenido al curso: $curso";
}); */
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return"Bienvenido al curso: $curso";
    }
    
    
});
