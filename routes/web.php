<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

/* rutas */

Route::get('/', Homecontroller ::class );

Route::get('cursos', [CursoController::class, 'index']);

Route:: get('cursos/create', [CursoController::class, 'create']);
 
Route::get('cursos/{curso}', [CursoController::class, 'show']);

/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return"Bienvenido al curso: $curso";
    }
    
    
}); */
