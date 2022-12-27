<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\StatisticsController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

// create user access token
Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});
//login
Route::post('login', [AuthController::class, 'login']);
// Register an user and create toeken access 
Route::post('/register', [AuthController::class, 'register']);
//
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Cuadros API endpoints
Route::apiResource('cuadros', PictureController::class)->middleware('auth:sanctum');
// Endpoint for Average service response response
Route::get('status', [StatisticsController::class, 'status']);
