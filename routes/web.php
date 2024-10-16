<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', [TransactionController::class,'All']);

Route::get('/read/{transaction}', [TransactionController::class,'Read']);


Route::get('/showCreate', [TransactionController::class,'showCreate']);
Route::post('/create', [TransactionController::class,'Create']);

Route::get('/edit/{transaction}', [TransactionController::class,'Edit']);
Route::put('/update/{transaction}', [TransactionController::class,'Update']);

Route::delete('/delete/{transaction}', [TransactionController::class,'Delete']);
