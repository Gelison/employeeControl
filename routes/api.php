<?php

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
use App\Http\Controllers\ApiUserController;

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




Route::apiResources([
    'user' =>ApiUserController::class,
    'education' => EducationController::class,
    'certification' => CertificationController::class,
    'substitution' => SubstitutionController::class,
    'transfer' => TransferController::class,
    'doctype' => DoctypeController::class,
    'level' => LevelController::class,
    'position' => PositionController::class,
    'division' => DivisionController::class,

]);
