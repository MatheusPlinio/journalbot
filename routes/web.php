<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{hash}', function ($hash) {
    abort_if(
        !Cache::has("newsbot:short:$hash"),
        404
    );

    return redirect()->away(
        Cache::get("newsbot:short:$hash"),
        302
    );
});