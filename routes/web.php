<?php

use App\Http\Controllers\DatesController;
use Illuminate\Support\Facades\Route;

Route::get('dates/{minifiedDayName}/', [DatesController::class, 'index'])->whereIn('minifiedDayName', ['su', 'mo', 'tu', 'we', 'th', 'fr', 'sa']);
