<?php

use App\Http\Controllers\controladorBD;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


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
/*rutas individuales por controlador*/
Route::get('/', [controladorVistas::class,'showWelcome'])->name('apWel');  
Route::get('Home', [controladorVistas::class,'showHome'])->name('apHom');
/*Route::get('Registrar', [controladorVistas::class,'showIngresar'])->name('apReg');*/
/*Route::get('Recuerdo', [controladorVistas::class,'showRecuerdos'])->name('apRec');*/


/*Rutas Post: esta envia datos*/ 

/*Route::post('GuardarRecuerdo', [controladorVistas::class,'procesarRecuerdo'])->name('SaveVit');*/

/*Rutas para controllador resourse*/

Route::get('recuerdo/create', [controladorBD::class,'create'])->name('recuerdo.create');

/*Store */
Route::post('recuerdo', [controladorBD::class,'store'])->name('recuerdo.store');

/*Index */
Route::get('recuerdo', [controladorBD::class,'index'])->name('recuerdo.index');

/*Edit */
Route::get('recuerdo/{id}/edit', [controladorBD::class,'edit'])->name('recuerdo.edit');

/*Update */
Route::put('recuerdo/{id}', [controladorBD::class,'update'])->name('recuerdo.update');

/*Show */
Route::get('recuerdo/{id}/show', [controladorBD::class,'show'])->name('recuerdo.show');

/*Delete */
Route::delete('recuerdo/{id}', [controladorBD::class,'destroy'])->name('recuerdo.destroy');

/*
Route::get('/', function () {
    return view('welcome');
});

Route::view('Home','Home')->name('apHom');
Route::view('Registrar','Registrar')->name('apReg');
Route::view('Recuerdo','Recuerdo')->name('apRec');
Route::view('Welcome','Welcome')->name('apWel');
Route::view('Template','Template'); */

/*rutas agrupadas por controlador
route::controller(controladorVistas::class)->group(
    function(){
        Route::get('/','showWelcome')->name('apWel');
        Route::get('Home','showHome')->name('apHom');
        Route::get('Registrar','showIngresar')->name('apReg');
        Route::get('Recuerdo','showRecuerdos')->name('apRec');
    }
);
*/