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



Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/add_food_items', function () {
    return view('add_food_items');
});

Route::get('/add_food_items1', function () {
    return view('aboutadd_food_items1');
});

Route::get('/Home', function () {
    return view('adminHome');
});

Route::get('/manager', function () {
    return view('adminManger');
});

Route::get('/adminRestaurant', function () {
    return view('adminRestaurant');
});

Route::get('/bill', function () {
    return view('bill');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/customer_registered_success', function () {
    return view('customer_registered_success');
});

Route::get('/customerlogin', function () {
    return view('customerlogin');
});

Route::get('/customersignup', function () {
    return view('customersignup');
});

Route::get('/delete_food_items', function () {
    return view('delete_food_items');
});

Route::get('/delete_food_items1', function () {
    return view('delete_food_items1');
});

Route::get('/deleteOrders', function () {
    return view('deleteOrders');
});

Route::get('/delivedFood', function () {
    return view('delivedFood');
});

Route::get('/edit_food_items', function () {
    return view('edit_food_items');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/feedbackview', function () {
    return view('feedbackview');
});

Route::get('/foodlist', function () {
    return view('foodlist');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/header_menu', function () {
    return view('header_menu');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/manager_login', function () {
    return view('manager_login');
});

Route::get('/manager_registered_success', function () {
    return view('manager_registered_success');
});

Route::get('/managerlogin', function () {
    return view('managerlogin');
});

Route::get('/managersignup', function () {
    return view('managerlogin');
});

Route::get('/myrestaurant', function () {
    return view('myrestaurant');
});

Route::get('/mysqlconnection', function () {
    return view('mysqlconnection');
});

Route::get('/onlinepay', function () {
    return view('onlinepay');
});

Route::get('/orderHistory', function () {
    return view('orderHistory');
});

Route::get('/orders-update', function () {
    return view('orders-update');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/paymentmake', function () {
    return view('paymentmake');
});

Route::get('/saveltem', function () {
    return view('saveltem');
});

Route::get('/session_manager', function () {
    return view('session_manager');
});

Route::get('/session_user', function () {
    return view('session_user');
});

Route::get('/shop_list', function () {
    return view('shop_list');
});

Route::get('/Token', function () {
    return view('Token');
});

Route::get('/update-cart', function () {
    return view('update-cart');
});

Route::get('/user_login', function () {
    return view('user_login');
});

Route::get('/view_food_items', function () {
    return view('view_food_items');
});

Route::get('/view_order_details', function () {
    return view('view_order_details');
});

Route::get('/view_order_expired', function () {
    return view('view_order_details');
});



Route::get('/signup','newController@signup');
Route::get('/login','newController@Login2');
Route::get('/food_item1','newController@food_item1');
Route::get('/food_item2','newController@food_item2');
Route::get('/food_item3','newController@food_item3');
Route::get('/food_item4','newController@food_item4');
Route::get('/food_item5','newController@food_item5');
Route::get('/food_item6','newController@food_item6');






