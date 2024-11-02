<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\SendEmailController;
Route::get('send-email', [SendEmailController::class, 'send']);

