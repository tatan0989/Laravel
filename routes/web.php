<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

/* rutas */

Route::get('/', Homecontroller ::class );

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route:: get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
    
});

