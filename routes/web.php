<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return '<h4>contact page</h4>';
});

// query strings
// Route::get('/store', function () {
//     $category = request('category');

//     if (isset($category)) {
//         return 'your category: ' . $category;
//     }

//     return 'view all categories';
// });

// dynamic paths
Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    $category = request('category');

    if (isset($category)) {
        if (isset($item)) {
            return "you are viewing the store for {$category} for {$item}";
        }

        return "you are viewing the store for {$category}";
    }

    return 'you are viewing all instruments';
});
