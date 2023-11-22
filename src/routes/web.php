<?php

use w3nck3\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use w3nck3\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);
