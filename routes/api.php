<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


require __DIR__ . '/api/admin.php';
require __DIR__ . '/api/customer.php';
require __DIR__ . '/api/public.php';
