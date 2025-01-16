<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dash\OrderSearchController;

Route::get(
    '/test',
    function (Request $request) {
        return "Connected success";
    },
);
