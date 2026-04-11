<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return redirect()->route('departments.index');
});

Route::resource('departments', DepartmentController::class);