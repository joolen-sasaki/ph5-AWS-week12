<?php

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

Route::get('/dummy-data', function () {
    $data = [
        [
            'name' => 'Michael Andrew Fox',
            'email' => 'john.doe@example.com',
            'age' => 30,
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'age' => 25,
        ],
        [
            'name' => 'Bob Johnson',
            'email' => 'bob.johnson@example.com',
            'age' => 35,
        ],
    ];
    return response()->json($data);
});
