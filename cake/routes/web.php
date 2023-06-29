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
use App\Mail\Contact;
use App\Models\hoadon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


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
Route::get('/payment/failed', function () {
    return view('pages.user.payment.failed');
})->name('paymant_fails');
Route::get('/payment/success', function () {
    return view('pages.user.payment.success');
})->name('paymant_success');
Auth::routes();
Route::post("/sendcontact", function(Illuminate\Http\Request $request){
    $arr = request()->post();
    $lienhe = [
        'hoten' =>trim(strip_tags( $arr['ht'] )),
        'email' =>trim(strip_tags( $arr['em'] )),
        'noidung' => trim(strip_tags( $arr['nd'] )),
        'tieude' =>trim(strip_tags( $arr['td'] )),
    ];
    $adminEmail = 'lamhoangtruong202@gmail.com'; //Gửi thư đến ban quản trị
    \Illuminate\Support\Facades\Mail::mailer('smtp')->to( $adminEmail )->send(new Contact($lienhe));
    Session::put('sendct',1);
    return redirect()->route('contact');
  });

Route::get('/', [HomeUserController::class, 'homepage'])->name('cake');
Route::get('/contact', [HomeUserController::class, 'contact'])->name('contact');
Route::post('/admin/home', [HomeController::class, 'filter_by_date'])->name('filter_by_date');

Route::post('/back-to-home', [HoadonController::class, 'insertDB'])->name('back-to-home');

Route::get('/shop', [SanphamController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/donhang', [HoadonController::class, 'donhang'])->name('donhang');
Route::post('/add_to_cart/{id?}', [CartController::class, 'add_to_cart'])->name('add_to_cart');

Route::get('/remove/{id?}', [ChitiethoadonController::class, 'destroy'])->name('remove');
Route::post('/checkout/{id?}', [CartController::class, 'checkout'])->name('checkout');
Route::get('/shop/{id?}', [SanphamController::class, 'shop_category'])->name('shop.category');
Route::get('/detail/{id?}', [SanphamController::class, 'detail'])->name('shop.detail');

Route::post('/update/{id?}', [CartController::class, 'updateqty'])->name('update');
Route::post('/update_cart', [CartController::class, 'update_cart'])->name('update_cart');
Route::post('/updateghichu/{id?}', [HoadonController::class, 'updateghichu'])->name('updateghichu');
Route::post('/searchdh', [HoadonController::class, 'searchdonhang'])->name('searchdh');
Route::post('/searchsp', [SanphamController::class, 'searchpr'])->name('searchpr');
Route::get('/chitietdh/{id?}', [HoadonController::class, 'chitietdonhang'])->name('ctdonhang');
Route::get('/chitietdh/huyhd/{id?}', [HoadonController::class, 'update_status_cancel'])->name('huydh');

//payment
Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('vnpay');
Route::post('/momoQR_payment', [PaymentController::class, 'momo_payment_qr'])->name('momoQR');
Route::post('/momoATM_payment', [PaymentController::class, 'momo_payment'])->name('momoATM');

Route::post('/show-checkout', [PaymentController::class, 'getdata'])->name('getdata');

Route::get('send-mail-momo/{emailpay?}', function ($emailpay) {
    $currentTime = Carbon::now();
    $code = explode('-', $_GET['orderId'])[1];
    $info = hoadon::find($code);
    $info->ngaylaphd = Carbon::createFromFormat('Y-m-d H:i:s', $currentTime)->format('Y-m-d');
    $info->phuongthucthanhtoan = 'MoMo';
    $info->save();
    if (Session::has('info')) {
        Session::forget('info');
        Session::forget('total');
    }
    Session::put('info', $info);
    Session::put('total', $_GET['amount']);

        if ($_GET["resultCode"] != 0)
        {
            return redirect()->route('paymant_fails');
        }
        else
        {
            $info->trangthai = 1;
            $info->save();
            Session::forget('cate');
            Session::forget('data');
            $details = [
                'title' => 'Mail from Cake King Forest Thanh Toan' . Session::get('mahd'),
                'body' => $info->mahd,
                'ten' => $info->tenkhachhang,
                'sdt' => $info->sdtkhachhang,
                'dchi' => $info->diachigiaohang,
                'hthuc' => $info->hinhthucnhanhang,
                'ngay' => Carbon::createFromFormat('Y-m-d', $info->ngaynhanhang)->format('d-m-Y'),
                'phuongthuc' => "MoMo",
                'total' => $_GET['amount']
            ];
            \Illuminate\Support\Facades\Mail::to((string) $emailpay)->send(new \App\Mail\SendEmailPay($details));
            Session::put('resultCode', $_GET["resultCode"]);
            return redirect()->route('paymant_success');
        }

});
Route::get('send-mail-vnp/{emailpay?}', function ($emailpay) {
    $currentTime = Carbon::now();
    $code = explode('-', $_GET['vnp_TxnRef'])[1];
    $info = hoadon::find($code);
    $info->ngaylaphd = Carbon::createFromFormat('Y-m-d H:i:s', $currentTime)->format('Y-m-d');
    $info->phuongthucthanhtoan = 'VnPay';
    $info->save();
    if (Session::has('info')) {
        Session::forget('info');
        Session::forget('total');
    }
    Session::put('info', $info);
    Session::put('total', $_GET['vnp_Amount'] / 100);
    if ($_GET['vnp_ResponseCode'] != '00') {
        return redirect()->route('paymant_fails');
    } else {
        $info->trangthai = 1;
        $info->save();
        Session::forget('cate');
        Session::forget('data');
        $details = [
            'title' => 'Mail from Cake King Forest Thanh Toan',
            'body' => $info->mahd,
            'ten' => $info->tenkhachhang,
            'sdt' => $info->sdtkhachhang,
            'dchi' => $info->diachigiaohang,
            'hthuc' => $info->hinhthucnhanhang,
            'ngay' => Carbon::createFromFormat('Y-m-d', $info->ngaynhanhang)->format('d-m-Y'),
            'phuongthuc' => "VNPAY",
            'total' => $_GET['vnp_Amount'] / 100
        ];
        \Illuminate\Support\Facades\Mail::to((string) $emailpay)->send(new \App\Mail\SendEmailPay($details));
        return redirect()->route('paymant_success');
    }
});

Route::get('send-mail/{emailpay?}', function ($emailpay) {

    $details = [
        'title' => 'Mail from Cake King Forest Thanh Toan' . Session::get('mahd'),
        'body' => Session::pull('hd_ma'),
        'ten' => Session::get('data')['tenkhachhang'],
        'sdt' => Session::get('data')['sdtkhachhang'],
        'dchi' => Session::get('data')['diachigiaohang'],
        'hthuc' => Session::get('data')['ship'],
        'ngay' => Session::get('data')['date'],
        'phuongthuc' => Session::pull('pttt'),
        'total' => Session::get('data')['total']
    ];
    \Illuminate\Support\Facades\Mail::to((string) $emailpay)->send(new \App\Mail\SendEmailPay($details));
    return redirect()->route('paymant_success');

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

        // route admin account
        Route::get('/manages/user', [UserController::class, 'index'])->name('user.index');
        Route::post('/manages/user', [UserController::class, 'show_admin'])->name('user.index.admin');
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
