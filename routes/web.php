<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('my-info', function (Request $request) {
    // dd('ok');
    return response()->json([
        'slack_name' => $request->query('slack_name'),
        'current_day' => today()->format('l'),
        'utc_time' => now(),
        'track' =>  $request->query('track'),
        'github_file_url' => 'https://github.com/NsonguruaJohnson/HNG-X-Task-1/blob/main/routes/api.php',
        'github_repo_url' => 'https://github.com/NsonguruaJohnson/HNG-X-Task-1.git',
        '“status_code”' => 200,
    ]);
});
