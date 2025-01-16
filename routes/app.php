<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\OrdersAppController;

Route::any(
    '/settings',
    [
        OrdersAppController::class,
        'get',
    ],
);
Route::any(
    '/orders',
    [
        OrdersAppController::class,
        'addOrder',
    ],
);
Route::get(
    '/test',
    function (Request $request) {
        return   "Connected success";
    },
);
