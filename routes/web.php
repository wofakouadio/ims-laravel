<?php

use App\Http\Controllers\SuperAdmin\SuperAdminController;
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
    return view('super-admin/dashboard');
});

Route::prefix('super-admin')->group(function (){
    //show new user page to register new user
    Route::get('/new-user', [SuperAdminController::class, 'show_new_user_page']);
    //show all users
    Route::get('/all-users', [SuperAdminController::class, 'show_all_users_page']);
});
