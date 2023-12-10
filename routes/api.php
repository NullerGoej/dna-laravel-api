<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\AddressController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user_id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{user_id}', [UserController::class, 'update']);
Route::delete('/users/{user_id}', [UserController::class, 'destroy']);

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{item_id}', [ItemController::class, 'show']);
Route::post('/items', [ItemController::class, 'store']);
Route::put('/items/{item_id}', [ItemController::class, 'update']);
Route::delete('/items/{item_id}', [ItemController::class, 'destroy']);

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/{order_id}', [OrderController::class, 'show']);
Route::post('/orders', [OrderController::class, 'store']);
Route::put('/orders/{order_id}', [OrderController::class, 'update']);
Route::delete('/orders/{order_id}', [OrderController::class, 'destroy']);

Route::get('/order_items', [OrderItemController::class, 'index']);
Route::get('/order_items/{order_item_id}', [OrderItemController::class, 'show']);
Route::post('/order_items', [OrderItemController::class, 'store']);
Route::put('/order_items/{order_item_id}', [OrderItemController::class, 'update']);
Route::delete('/order_items/{order_item_id}', [OrderItemController::class, 'destroy']);

Route::get('/item_categories', [ItemCategoryController::class, 'index']);
Route::get('/item_categories/{item_category_id}', [ItemCategoryController::class, 'show']);
Route::post('/item_categories', [ItemCategoryController::class, 'store']);
Route::put('/item_categories/{item_category_id}', [ItemCategoryController::class, 'update']);
Route::delete('/item_categories/{item_category_id}', [ItemCategoryController::class, 'destroy']);

Route::get('/addresses', [AddressController::class, 'index']);
Route::get('/addresses/{address_id}', [AddressController::class, 'show']);
Route::post('/addresses', [AddressController::class, 'store']);
Route::put('/addresses/{address_id}', [AddressController::class, 'update']);
Route::delete('/addresses/{address_id}', [AddressController::class, 'destroy']);