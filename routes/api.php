<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PerdaController;
use App\Http\Controllers\SystemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::post('login', [ApiController::class, 'authenticate']);
Route::post('register', [ApiController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', [ApiController::class, 'logout']);
    Route::get('get_user', [ApiController::class, 'get_user']);
    //dokumen perda
    Route::get('perda/get', [PerdaController::class, 'index']);
    Route::post('perda/create', [PerdaController::class, 'store']);
    Route::get('perda/get/{id}', [PerdaController::class, 'show']);
    Route::put('perda/put/{perda}',  [PerdaController::class, 'update']);
    Route::delete('perda/delete/{perda}',  [PerdaController::class, 'destroy']);
    //system
    Route::get('sys/get', [SystemController::class, 'index']);
    Route::post('sys/create', [SystemController::class, 'store']);
    Route::get('sys/get/{id}', [SystemController::class, 'show']);
    Route::put('sys/put/{system}',  [SystemController::class, 'update']);
    Route::delete('sys/delete/{system}',  [SystemController::class, 'destroy']);
});
