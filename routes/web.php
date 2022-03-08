<?php

use App\Http\Livewire\AltaUsuario;
use App\Http\Livewire\RegistroTareas;
use App\Http\Livewire\ReporteFallas;
use App\Models\RegistroTareas as ModelsRegistroTareas;
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
    return redirect('/login');
});

Route::middleware(['auth:sanctum','verified'])->group(function () {

    Route::get('/dashboard', function (){
        return view('dashboard',[
            'tasksLength' => ModelsRegistroTareas::where('estado','=',false)->get()->count()
        ]);
    })->name('dashboard');

    Route::get('/registro-tareas',RegistroTareas::class)->name('registro-tareas');
    Route::get('/reporte-fallas',ReporteFallas::class)->name('reporte-fallas');
});


Route::middleware(['auth:sanctum','verified','admin'])
        ->get('/alta-usuario',AltaUsuario::class)
        ->name('alta-usuario');