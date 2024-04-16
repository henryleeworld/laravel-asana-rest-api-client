<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Api\V1'], function () {
	// Public routes
    Route::get('/asana', 'AsanaController@show');
});
