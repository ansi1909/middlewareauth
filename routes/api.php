<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\AuthController;




/* Middleware en ruta */
/*Route::middleware('example')->get('/', [ExampleController::class, 'index']);
Route::get('/no-access', [ExampleController::class, 'noAccess'])->name('no-access');*/

/* Middleware en Grupos de ruta */

/*Route::middleware(['example', 'auth', 'admin'])->group(function () {
    Route::get('/', [ExampleController::class, 'index']);
    Route::get('/', [ExampleController::class, 'index']);
    Route::get('/', [ExampleController::class, 'index']);
    Route::get('/', [ExampleController::class, 'index'])->withoutMiddleware('admin');
});*/

/* Middleware en Constructores */
/*Route::get('/', [ExampleController::class, 'index']);
Route::get('/no-access', [ExampleController::class, 'noAccess'])->name('no-access');*/

Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
