<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZaposlenController;
use App\Http\Controllers\EkspozitureController;
use App\Http\Controllers\PosloviController;
use App\Http\Controllers\UlogaController;
use App\Http\Controllers\SmeneController;
use App\Http\Controllers\NajaveController;
use App\Http\Controllers\ZaposlenEkspozitura;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/ekspozitura", EkspozitureController::class);

Route::resource("/zaposlen", ZaposlenController::class);

Route::resource("/poslovi", PosloviController::class);

Route::resource("/uloga", UlogaController::class);

Route::resource("/smene", SmeneController::class);

Route::resource("/najave", NajaveController::class);

Route::resource("/zaposleniexpoziture ", ZaposlenEkspozitura::class);





