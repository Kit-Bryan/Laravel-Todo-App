<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks.index');
});

Route::get('/tasks/create', function () {
    return view('tasks.create');
});




// Replace homepage

// Create a task

// Display a list of task

// Mark a task as completed

// Divide the tasks into completed and uncompleted section

// Delete a task permanently