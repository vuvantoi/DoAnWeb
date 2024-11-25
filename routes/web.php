<?php
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\uploadController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\orderController;
use Illuminate\Support\Facades\Route;
use App\Models\product;

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
//login
Route::get('/login',[FrontendController::class,'show_login'])->name('login');
Route::post('/check_login',[FrontendController::class,'check_login']);


// admin
Route::middleware('auth')-> group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/',function () {return view('admin.home');});

        //product
        Route::post('product/add',[productController::class,'insert_product']);
        Route::get('product/create',[productController::class,'add_product']);
        Route::get('product/delete',[productController::class,'delete_product']);
        Route::get('product/edit/{id}',[productController::class,'edit_product']);
        Route::post('product/edit/{id}',[productController::class,'update_product']);
        Route::get('product/list',[productController::class,'list_product'] );

        //order
        Route::get('order/list',[orderController::class,'list_order']);
        Route::get('order/detail/{order_detail}',[orderController::class,'detail_order']);

        //upload
        Route::post('/upload',[uploadController::class,'uploadImage'])->name('upload');
        Route::post('/uploads',[uploadController::class,'uploadImages'])->name('uploads');
    });
});


//fontend
Route::get('/',[FrontendController::class,'index']);
Route::get('/product/{id}',[FrontendController::class,'show_product']);
Route::get('/order/confirm', function () {return view('order/confirm');});
Route::get('/order/success', function () {return view('order/success');});

//cart
Route::post('/cart/add',[FrontendController::class,'add_cart']);
Route::get('/cart',[FrontendController::class,'show_cart']);
Route::get('/cart/delete/{id}',[FrontendController::class,'delete_cart']);
Route::post('/cart/update',[FrontendController::class,'update_cart']);
Route::post('/cart/send',[FrontendController::class,'send_cart']);

