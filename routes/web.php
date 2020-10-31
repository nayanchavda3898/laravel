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

Route::get('/', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/groundbooking', function () {
    return view('groundbooking');
});
Route::get('/batchregistration', function () {
    return view('batchregistration');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/admin/index', function () {
    return view('admin/admin_index');
});
Route::get('/admin/view_batch_type', function () {
    return view('admin/admin_view_batch_type');
});
Route::get('/admin/view_batch_register', function () {
    return view('admin/admin_view_batch_register');
});
Route::get('/admin/view_registration', function () {
    return view('admin/admin_view_registration');
});
Route::get('/admin/view_ground_booking', function () {
    return view('admin/admin_view_ground_booking');
});

// addd
// Route::get('/admin/add_batch_type', function () {
//     return view('admin/admin_add_batch_type');
// });

Route::get('admin/add_batch_type','BatchTypeController@index');
Route::get('/admin/add_batch_register', function () {
    return view('admin/admin_add_batch_register');
});

Route::get('/admin/add_ground_booking', function () {
    return view('admin/admin_add_ground_booking');
});

Route::get('/admin/add_registration', function () {
    return view('admin/admin_add_registration');
});