<?php

use App\Livewire\About;
use App\Livewire\Blog;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class);

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class);

Route::middleware('auth')->group(function(){
    Route::get('/blog', Blog::class);
    Route::get('/about', About::class);
});