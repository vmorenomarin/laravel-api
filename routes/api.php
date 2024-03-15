<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\V1\PostController as PC1;
use \App\Http\Controllers\Api\V2\PostController as PC2;
use App\Models\Post;

Route::apiResource('v1/posts', PC1::class);
Route::apiResource('v2/posts', PC2::class)->middleware('auth:sanctum');

Route::post('login', [App\Http\Controllers\Api\LoginContoller::class, 'login']);