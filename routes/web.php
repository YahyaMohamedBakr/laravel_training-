<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login_controller;
use App\Models\Login_model;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Illuminate\Support\Facades\Cookie;
use App\Helpers\AppHelper;
use App\Http\Controllers\Posts_controller;
use App\Http\Middleware\CheckCookies;

// Illuminate\Support\Facades\Request::withCookie();

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
//     return view('/login');
// });



// Route::get('/{name}', function ($name) {
//     return view('/login',[
//         'name'=>$name
//     ]);
// });

//login Routes
Route::get(
    '/',
    [Login_controller::class, 'index']
);

Route::post(
    '/login',
    [Login_controller::class, 'login']
);

Route::get('/welcome',

[Login_controller::class, 'welcome']

)->middleware('cookies');


//Home routes

Route::get('/dashboard',

[Posts_controller::class, 'index']

)->Middleware('cookies');

Route::get('/profile',

[HomeController::class, 'profile']

);

//Post Routes
Route::get('/posts',

[Posts_controller::class, 'index']

);
Route::get('/posts/{slug}',
[Posts_controller::class, 'singlePost']
);
//Add Post
Route::get('/add_post',

[Posts_controller::class, 'addNewPost']

)->Middleware('cookies');

Route::post('/submit_new_post',

[Posts_controller::class, 'saveNewPost']

);
//Edit Post
Route::get('/posts/{slug}/edit',
[Posts_controller::class, 'editPost']
)->Middleware('cookies');

Route::post('/posts/{slug}/save',
[Posts_controller::class, 'saveEditPost']
);
