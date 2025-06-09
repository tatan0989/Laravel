<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/* rutas */

Route::get('/', HomeController ::class );

/* Route :: get('cursos',[CursoController::class,'index'])->name('cursos.index');

Route :: get('cursos/create',[CursoController::class,'create'])->name('cursos.create');

Route :: post('cursos',[CursoController::class,'store'])->name('cursos.store');

Route :: get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');

Route:: get('cursos/{curso}/edit', [CursoController::class,'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); */

Route::resource('cursos', CursoController::class)->parameters(['asiganturas'=>'curso'])->names('cursos');