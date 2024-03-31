<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->get('/', "App\\Http\\Controllers\\TasksController@index");
Route::middleware(['auth:sanctum'])->post("/tasks", "App\\Http\\Controllers\\TasksController@store");
Route::middleware(['auth:sanctum'])->patch("/complete", "App\\Http\\Controllers\\TasksController@update");
Route::middleware(['auth:sanctum'])->delete("/delete", "App\\Http\\Controllers\\TasksController@delete");

