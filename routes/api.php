<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\CertificationController;
use App\Http\Controllers\Api\SubstitutionController;
use App\Http\Controllers\Api\TransferController;
use App\Http\Controllers\Api\DoctypeController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\InformationController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ApiUserController;
use App\Models\Information;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['throttle:api'])->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
});


Route::middleware(['throttle:api', 'auth:sanctum'])->group(function () {
    Route::get('roles', [RoleController::class, 'index']);


    Route::apiResources([
        'user' => UserController::class,
        'information' => InformationController::class,
        'education' => EducationController::class,
        'certification' => CertificationController::class,
        'substitution' => SubstitutionController::class,
        'transfer' => TransferController::class,
        'doctype' => DoctypeController::class,
        'level' => LevelController::class,
        'position' => PositionController::class,
        'division' => DivisionController::class,

    ]);
    Route::get('logout', [AuthController::class, 'logout']);
});
