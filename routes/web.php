<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;

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
Route::get('candidate/create', [CandidateController::class, 'index']);
Route::post('/create', [CandidateController::class, 'create']);
Route::get('candidate/list', [CandidateController::class, 'list']);
Route::get('candidate/select', [CandidateController::class, 'select']);
Route::post('/update', [CandidateController::class, 'update']);

