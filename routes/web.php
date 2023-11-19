<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get("profile/{id?}", [ProfileController::class, "index"]);