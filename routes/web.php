<?php

use App\Http\Controllers\DatesController;
use Illuminate\Support\Facades\Route;

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
Route::get('dates/{minifiedDayName}/', [DatesController::class, 'index'])->whereIn('minifiedDayName', ['su', 'mo', 'tu', 'we', 'th', 'fr', 'sa']);
