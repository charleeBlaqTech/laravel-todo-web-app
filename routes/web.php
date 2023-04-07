<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TodoListController::class, 'getTodos'] );

Route::post('/',[TodoListController::class, 'postTodo']);

Route::get('edit-todo/{id}',[TodoListController::class, 'editTodoTextArea']);

Route::post('edit-todo',[TodoListController::class, 'editTodo']);

Route::get('delete-todo/{id}',[TodoListController::class, 'deleteTodo']);



