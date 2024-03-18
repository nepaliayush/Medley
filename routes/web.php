<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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

Route::get('/', function () {
    return view('home');
});
// Route::get('/', function () {
//     return view('master');
// });

Route::get('signup', function () {
    return view('signup');
});
Route::get('about', function () {
    return view('about');
});
Route::get('shirts', function () {
    return view('shirts');
});
Route::get('shop', function () {
    return view('shop');
});
Route::get('logout', function () {
    auth()->logout();
    Session::forget('user');
    return redirect('login');
});
// Route::get('details', function () {
//     return view('detail');
// });
Route::group(['middleware'=>"web"],function(){
    Route::post('/signup/store',[UserController::class,'store'])->name('signup.store');

    Route::get('login', function () {
        return view('login');
    });
    
    //Route::get('/login',[UserController::class,'loginView'])->name('login.loginView');
    Route::post('/login',[UserController::class,'login'])->name('login');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::get('/',[ProductController::class,'slider']);
    Route::get('/shirts',[ProductController::class,'shirts'])->name('shirts');
    Route::get('/pants',[ProductController::class,'pants'])->name('pants');
    Route::get('/shoes',[ProductController::class,'shoes'])->name('shoes');
    Route::get('/tshirts',[ProductController::class,'tshirts'])->name('tshirts');
    Route::get('details/{id}',[ProductController::class,'details']);
    Route::post('/addcart/{id}',[CartController::class,'addToCart'])->name('addcart');
    Route::get('/cart',[CartController::class,'cartDisplay'])->name('cart');
    Route::get('/removecart/{id}',[CartController::class,'cartRemove'])->name('remove');
    Route::post('/addorder/{id}',[ProductController::class,'addOrder'])->name('addorder');
});