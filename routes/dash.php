<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dash\OrdersDashController;

Route::any(
    '/orders',
    [
        OrdersDashController::class,
        'handleOrders',
    ],
);
Route::any(
    '/settings',
    [
        OrdersDashController::class,
        'getSettings',

    ],
);
Route::get(
    '/search',
    [
        OrdersDashController::class,
        'search',
    ],
);
Route::get(
    '/test',
    function (Request $request) {
        return   "Connected success";
    },
);
