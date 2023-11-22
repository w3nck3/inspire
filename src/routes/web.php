<?php

use Wh\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Wh\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);
