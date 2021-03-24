<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;



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
    return view('welcome');
});

Route::get('add/{num1}/{num2}', [CalculatorController::class, 'add']);

Route::get('subtract/{num1}/{num2}', [CalculatorController::class, 'subtract']);

Route::get('multiply/{num1}/{num2}', [CalculatorController::class, 'multiply']);

Route::get('divide/{num1}/{num2}', [CalculatorController::class, 'divide']);