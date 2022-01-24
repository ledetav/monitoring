<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\Api\v1\StationController;
use App\Http\Controllers\Api\v1\EffectiveController;
use App\Http\Controllers\Api\v1\KeyController;
use App\Http\Controllers\Api\v1\MeasurementController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'users' => UserController::class,
    'stations' => StationController::class,
    'measurements' => MeasurementController::class,
    'effectives' => EffectiveController::class,
    'keys' => KeyController::class,
]);