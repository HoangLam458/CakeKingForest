<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\HoadonController;
use App\Http\Controllers\LoaisanphamController;
use App\Http\Controllers\ChitiethoadonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Auth::routes();

Route::get('/', [HomeUserController::class, 'homepage'])->name('cake');
Route::get('/contact', [HomeUserController::class, 'contact'])->name('contact');

Route::post('/back-to-home',[HoadonController::class, 'insertDB'])->name('back-to-home');

Route::get('/shop', [SanphamController::class, 'shop'])->name('shop');
Route::get('/cart/{id?}', [CartController::class, 'cart'])->name('cart');
Route::get('/donhang', [HoadonController::class, 'donhang'])->name('donhang');
Route::post('/add_to_cart/{id?}', [CartController::class, 'add_to_cart'])->name('add_to_cart');

Route::get('/remove/{id?}', [ChitiethoadonController::class, 'destroy'])->name('remove');
Route::post('/checkout/{id?}', [CartController::class, 'checkout'])->name('checkout');
Route::get('/shop/{id?}', [SanphamController::class, 'shop_category'])->name('shop.category');
Route::get('/detail/{id?}', [SanphamController::class, 'detail'])->name('shop.detail');

Route::post('/update/{id?}', [CartController::class, 'updateqty'])->name('update');
Route::post('/updateghichu/{id?}', [HoadonController::class, 'updateghichu'])->name('updateghichu');
Route::post('/searchdh', [HoadonController::class, 'searchdonhang'])->name('searchdh');
Route::post('/searchsp', [SanphamController::class, 'searchpr'])->name('searchpr');
Route::get('/chitietdh/{id?}', [HoadonController::class, 'chitietdonhang'])->name('ctdonhang');
Route::get('/chitietdh/huyhd/{id?}', [HoadonController::class, 'update_status_cancel'])->name('huydh');

//payment
Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('VNPay');
Route::post('/momoQR_payment', [PaymentController::class, 'momo_payment_qr'])->name('momoQR');

Route::get('/paymentsuccess', function () {
    return view('pages.user.payment.paymentsuccess');
});

Route::get('/paymentfailed', function () {
    return view('pages.user.payment.paymentfailed');
});

Route::get('send-mail-momo/{emailpay?}', function ($emailpay) {
        if($_GET["partnerCode"]=="MOMOBKUN20180529"){
            if($_GET["resultCode"]!=0){
                return redirect()->route('cart');
            }else{
                $details = [
                    'title' => 'Mail from Cake King Forest  MOMO' . 'HD' . explode('-', $_GET['orderId'])[1],
                    'body' => 'This is for testing email using smtp'
                ];
                \Mail::to((string)$emailpay)->send(new \App\Mail\SendEmailPay($details)); 
                Session::put('resultCode',$_GET["resultCode"]);
                return redirect()->route('ctdonhang',  explode('-', $_GET['orderId'])[1]);
        }
    }
});

Route::get('send-mail/{emailpay?}', function ($emailpay) {
    if(Session::get('payment')==0){
        $details = [
            'title' => 'Mail from Cake King Forest Thanh Toan' . Session::get('mahd'),
            'body' => 'This is for testing email using smtp'
        ];
        \Mail::to((string)$emailpay)->send(new \App\Mail\SendEmailPay($details)); 
        return redirect()->route('ctdonhang', Session::get('mahd'));
    }
})->name('sendemailpay');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/user-edit/{id?}', [UserController::class, 'User_update'])->name('User_edit');
    Route::get('/trang-ca-nhan/{id?}', [UserController::class, 'profile'])->name('trang-ca-nhan');
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
Route::post('/login2', [LoginController::class, 'login'])->name('login2');
Route::get('/signout', [UserController::class, 'logout'])->name('logout2');
Route::group(['middleware' => 'auth'], function () {
    Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

Route::group(['middleware' => 'user.auth.check', 'prefix' => null], function () {

    Route::group(['middleware' => 'bulkhead.check', 'prefix' => "admin"], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::post('/filter-by-date',[HomeController::class,'filter_by_date']);
        // route admin account
        Route::get('/manages/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/manages/user/detail/{id?}', [UserController::class, 'show'])->name('user.detail');
        Route::get('/manages/user/create', [UserController::class, 'create'])->name('user.create.form');
        Route::post('/manages/user/create', [UserController::class, 'store'])->name('user.create');
        Route::get('/manages/user/edit/{id?}', [UserController::class, 'edit'])->name('user.edit.form');
        Route::post('/manages/user/edit/{id?}', [UserController::class, 'update'])->name('user.edit');
        Route::get('/manages/user/delete/{id?}', [UserController::class, 'destroy'])->name('user.delete');
        // route admin sản phẩm
        Route::get('/manages/sanpham', [SanphamController::class, 'index'])->name('sanpham.index');
        Route::get('/manages/sanpham/detail/{id?}', [SanphamController::class, 'show'])->name('sanpham.detail');
        Route::get('/manages/sanpham/edit/{id?}', [SanphamController::class, 'edit'])->name('sanpham.edit.form');
        Route::post('/manages/sanpham/edit/{id?}', [SanphamController::class, 'update'])->name('sanpham.edit');
        Route::get('/manages/sanpham/create', [SanphamController::class, 'create'])->name('sanpham.create');
        Route::post('/manages/sanpham/store', [SanphamController::class, 'store'])->name('sanpham.store');
        Route::get('/manages/sanpham/delete/{id?}', [SanphamController::class, 'destroy'])->name('sanpham.delete');
        // route admin size
        Route::get('/manages/size', [SizeController::class, 'index'])->name('size.index');
        Route::get('/manages/size/detail/{id?}', [SizeController::class, 'show'])->name('size.detail');
        Route::get('/manages/size/edit/{id?}', [SizeController::class, 'edit'])->name('size.edit.form');
        Route::post('/manages/size/edit/{id?}', [SizeController::class, 'update'])->name('size.edit');
        Route::get('/manages/size/create', [SizeController::class, 'create'])->name('size.create');
        Route::post('/manages/size/store', [SizeController::class, 'store'])->name('size.store');
        Route::get('/manages/size/delete/{id?}', [SizeController::class, 'destroy'])->name('size.delete');
        //route admin hoadon
        Route::get('/manages/invoices', [HoadonController::class, 'index'])->name('invoice.index');
        Route::get('/manages/invoice/detail/{id?}', [HoadonController::class, 'show'])->name('invoice.detail');
        Route::get('/manages/invoice/edit/{id?}', [HoadonController::class, 'edit'])->name('invoice.edit.form');
        Route::post('/manages/invoice/edit/{id?}', [HoadonController::class, 'update'])->name('invoice.edit');
        Route::get('/manages/invoice/delete/{id?}', [HoadonController::class, 'destroy'])->name('invoice.delete');
        Route::get('/manages/invoice/status/{id?}', [HoadonController::class, 'update_status_success'])->name('invoice.status.success');
        Route::get('/manages/invoice/status1/{id?}', [HoadonController::class, 'update_status_ship'])->name('invoice.status.ship');
        Route::get('/manages/invoice/status2/{id?}', [HoadonController::class, 'update_status_cancel'])->name('invoice.status.cancel');
        Route::get('/manages/invoice/status3/{id?}', [HoadonController::class, 'update_status_approved'])->name('invoice.status.approved');
        //route admin loai san pham
        Route::get('/manages/category', [LoaisanphamController::class, 'index'])->name('category.index');
        Route::get('/manages/category/create', [LoaisanphamController::class, 'create'])->name('category.create.form');
        Route::post('/manages/category/create', [LoaisanphamController::class, 'store'])->name('category.create');
        Route::get('/manages/category/edit/{id?}', [LoaisanphamController::class, 'edit'])->name('category.edit.form');
        Route::post('/manages/category/edit/{id?}', [LoaisanphamController::class, 'update'])->name('category.edit');
        Route::get('/manages/category/delete/{id?}', [LoaisanphamController::class, 'destroy'])->name('category.delete');

    });
});
