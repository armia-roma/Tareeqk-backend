<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/posts', function () {
    return response()->json([
        ['id' => 1, 'title' => 'First Post', 'content' => 'This is the content of the first post.'],
        ['id' => 2, 'title' => 'Second Post', 'content' => 'This is the content of the second post.'],
    ]);
});
