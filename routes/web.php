<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     //return view('welcome');
//     return "HELLO";
// });

//Route::get('/post/{id}', [PostController::class, 'index']); 

// Route::get('/about', function () {
//     //return view('welcome');
//     return "About me";
// });


// Route::get('/contact', function () {
//     //return view('welcome');
//     return "Hi this is contact page";
// });
// Route::get('/post/{id}/{name}', function ($id, $name) {
//     //return view('welcome');
//     return "Post number is: ". $id. " name: ". $name;
// });

// Route::get('admin/posts/example', array('as' => 'admin.home',function () {
//     $url = route('admin.home');
//     return "this is url:". $url;
// }));

//Route::resource('posts', [PostController::class, '']); 
Route::resource('posts', PostController::class);
Route::get('/contact', [PostController::class, 'contact']); 
Route::get('/post/{id}/{name}/{job}', [PostController::class, 'show_post']); 