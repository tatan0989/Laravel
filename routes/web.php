<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


/* rutas */

Route::get('/', HomeController ::class)->name('home');

/* Route :: get('cursos',[CursoController::class,'index'])->name('cursos.index');

Route :: get('cursos/create',[CursoController::class,'create'])->name('cursos.create');

Route :: post('cursos',[CursoController::class,'store'])->name('cursos.store');

Route :: get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');

Route:: get('cursos/{curso}/edit', [CursoController::class,'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); */

Route::resource('cursos', CursoController::class)->parameters(['asiganturas'=>'curso'])->names('cursos');

Route::view('nosotros','nosotros')->name('nosotros');

/* Route::get('contactanos', function (){

    Mail::to('estefanyrojas200419@gmail.com')
    ->send(new ContactanosMailable);
    return "Mensaje enviado";
    
})->name('contactanos'); */

Route::get('contactanos',[ContactanosController::class, 'index'])
->name('contactanos.index');

Route::post('contactanos',[ContactanosController::class, 'store'])
->name('contactanos.store');

Route::get('prueba', function (){
    return "Has accedido corectamente a esta ruta";
    
});