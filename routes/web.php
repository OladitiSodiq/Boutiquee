<?php

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

Route::get('/', 'c_ustomer@productLandingPage')->name('home');
Route::post('/ajax-desc', 'c_ustomer@ajaxDesc')->name('ajax.desc');
Route::get('/product-{id}', 'c_ustomer@productDesc');
Route::get('/add-to-cart/{id}', 'c_ustomer@addToCart');

Route::get('/cart', 'c_ustomer@showCart');
Route::patch('/update-cart/{id}', 'c_ustomer@updateCart');

Route::post('/deleteCart', 'c_ustomer@deleteCart');


Route::post('/updateCart', 'c_ustomer@updateCart');
Route::get('/wishlist/{id}', 'c_ustomer@addTowishlist');

Route::get('/cart', 'c_ustomer@showCart');

Route::get('/checkout', 'c_ustomer@showcheckout');
Route::get('/checkout2', 'c_ustomer@showcheckout2');
Route::get('/whishlist', 'c_ustomer@wishlist');

Route::get('/customer-login', function () {
  if (Session::get('logged_in')) {
    return redirect('/');
  }
  return view('customer-login');
})->name('customer-login');

Route::post('/customer-login', 'c_ustomer@login')->name('login');

Route::get('/customer-register', function () {

  return view('/customer-register');
})->name('register');

Route::post('/customer-register', 'c_ustomer@register');


Route::view('/register_success', 'register_success');
Route::get('/customer-account', 'c_ustomer@cus_accoutnt')->middleware('isValidUser')->name('customer.account');
Route::post('/customer-update', 'c_ustomer@update')->middleware('isValidUser')->name('customer.update');
Route::group(['middleware' => ['isAdmin', 'isValidUser']], function () {
  // account_update
 
  //
 


  Route::get('/customer-order', 'c_ustomer@order_view');
  Route::get('/customer-orders', 'c_ustomer@orders_view');
  Route::post('/add-new-product', 'c_ustomer@add_food');

  Route::get('/change_password', 'c_ustomer@chnge_pword');
  // Route::get('/catalogue', 'ProductController@productCatalogue');
  // Route::get('/orders/all', 'OrdersController@show_all_orders');
  // Route::get('/orders/new', 'OrdersController@show_new_orders');
  // Route::get('/order/{id}', 'OrdersController@show_order_with_id');
  // Route::get('/modify/{id}', 'ProductController@modifyView');
  // Route::post('/modify-product', 'ProductController@editProductDetails');
  // Route::get('/view/{id}', 'ProductController@viewProductDetails');
  // Route::get('/confirm-delete/{id}', 'ProductController@deleteProductView');
  // Route::get('/delete/{id}', 'ProductController@deleteProduct');
  // Route::get('/add-to/{id}', 'ProductController@addToView');
  // Route::post('/add-to', 'ProductController@addTo');
  // Route::post('/change-order-status', 'OrdersController@changeOrderStatus');
  // Route::get('/orders/all/{cat}', 'OrdersController@showOrderCategory');


  // Route::get('/invoice', 'OrdersController@adminDownloadInvoice');


  // Route::get('/settings', function () {
  //   return view('dashboard.settings');
  // })->name('dashboard.settings');

  // Route::fallback(function () {
  //   return response()->view('dashboard.404', [], 404);
  // });

});

Route::prefix('office')->group(function () {
  //LOgin
  //Route::get('/', 'AdminDashbordController@index')->name('admin.index');
  Route::get('/', 'AuthController@showLoginForm')->name(
      'admin.index'
  );

  Route::post('/', 'AuthController@login')->name('admin.login');

  Route::get('/Dashboard', 'AuthController@showAdminDashboard')->name(
      'admin.dashboard'
  );

  // Route::post('/login', 'Auth\AdminLoginController@login')->name(
  //     'admin.login.submit'
  // );

  Route::get('/logout', 'Auth\AdminLoginController@logout')->name(
      'admin.logout'
  );

});