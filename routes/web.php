<?php

declare(strict_type=1);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(request()->root());
});
