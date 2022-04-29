<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\VideoController;

Route::resource('videos', VideoController::class)->only(['index','create','store']);
