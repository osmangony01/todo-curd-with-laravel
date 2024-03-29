<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/todo', function(){
//     return view('todo.add');
// });

Route::get('/todos', [TodoController::class, 'allTodo']);

Route::get('/add-todo', [TodoController::class, 'addTodo']);
Route::post('/store-todo',[TodoController::class, 'store']);

Route::get('/edit-todo/{id}',[TodoController::class, 'edit']);
Route::post('/update-todo/{id}',[TodoController::class, 'update']);

Route::get('/delete-todo/{id}', [TodoController::class, 'delete']);
