<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Model
use App\Models\User;

// Controller
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\StoreDashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\HomeController;

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

// Auth::routes();

Auth::routes();




/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => 'auth'], function(){

    Route::group(['prefix' => 'store'], function(){
        Route::get('/create', [StoreController::class, 'createPage']);
        Route::post('/create', [StoreController::class, 'createStore']);
        // Route::get('/update', [StoreController::class, 'updatePage']);
        // Route::post('/update/{_id}', [StoreController::class, 'updateStore']);
        // Route::post('/delete/{_id}', [StoreController::class, 'deleteStore']);
    });

    Route::group(['prefix' => 'store'], function(){
        Route::get('/dashboard', [StoreDashboardController::class, 'showStoreDashboard']);
    });

    Route::group(['prefix' => 'user'], function() {
        Route::get('/dashboard', [UserDashboardController::class, 'showUserDashboard'])->name('user.dashboard');
    });


    // SSLCOMMERZ Start
    Route::get('/checkout', [SslCommerzPaymentController::class, 'showEasyCheckoutPage']);
    Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

    Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
    Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
    //SSLCOMMERZ END

});


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
*/





Route::group(['middleware' => 'guest'], function(){


});


Route::group(['prefix' => 'product'], function(){
    Route::get('/{productID}', [ProductController::class, 'showSingleProduct']);
});

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::get('/{_storeSlug}', [StoreController::class, 'showStore']);
Route::get('/', [HomeController::class, 'showHomePage']);
