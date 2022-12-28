<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ClientController;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Admin\ClientController as Client;

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

/** ADMINISTRATION */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function (){


    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.do');
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');

    /** Rotas Protegidas */
    //Route::group(['middleware' => ['auth:admin']], function () {
        Route::middleware(['auth:admin'])->group(function () {

            /** Dashboard Home */
            Route::get('home', [AuthController::class, 'home'])->name('home');
    
            /** Gestão de Clientes */
            Route::resource('client', 'ClientController');
    
            /** Integração API CPanel */
            Route::resource('cpanel', 'CPanelController');
    
            /** Gestão de Administradores */
            Route::resource('manager', 'AdminController');
    
            /** Gestão de Subcategorias */
            Route::resource('categories', 'CategoryController');
    
            /** Gestão de Planos */
            Route::resource('plan', 'PlanController');
    
            /** Gestão de Categorias */
            Route::resource('subcategories', 'SubcategoryController');
    
            /** Gestão de Usuários */
            Route::resource('user', 'UserController');  
    
         }); 

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});


Route::get('/', function () {
    return view('welcome');
});