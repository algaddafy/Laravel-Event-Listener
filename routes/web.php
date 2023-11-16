<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribedController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/subscribed',[SubscribedController::class,'subscribed']);