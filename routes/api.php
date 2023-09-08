<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/my-info', function (Request $request) {
    // dd('ok');
    return response()->json([
        'slack_name' => $request->query('slack_name'),
        'current_day' => today()->format('l'),
        'utc_time' => now(),
        'track' =>  $request->query('track'),
        'github_file_url' => 'kkk',
        'github_repo_url' => 'https://github.com/NsonguruaJohnson/HNG-X-Task-1.git',
        '“status_code”' => 200,
    ]);
});

