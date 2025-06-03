<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/* rutas */

Route::get('/', HomeController ::class );

Route :: get('cursos',[CursoController::class,'index'])->name('cursos.index');

Route :: get('cursos/create',[CursoController::class,'create'])->name('cursos.create');

Route :: get('cursos/{id}',[CursoController::class,'show'])->name('cursos.show');


