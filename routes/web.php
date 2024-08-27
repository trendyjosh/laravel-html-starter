<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
| New routes can be added in the following format:
|   Route::get('url-signature', function () {
|       return view('file-name');
|   });
|
*/

Route::get('/', function () {
    return view('welcome');
});

// E.g. 'mywebsite.co.uk/my-story' url will access the 'about.blade.php' view
// Route::get('my-story', function () {
//     return view('about');
// });
