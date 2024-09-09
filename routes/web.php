<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwilioSMSController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('sendSMS', [TwilioSMSController::class, 'index']);