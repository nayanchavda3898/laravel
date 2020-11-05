<?php

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
// Route::get('/admin/', function () {
//     return view('admin/admin_index');
// });
// Route::get('/admin/view_batch_type', function () {
//     return view('admin/admin_view_batch_type');
// });

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
Route::get('/admin/add_batch_type','BatchTypeController@index');
Route::post('/admin/insert_batch_type','BatchTypeController@store');
Route::get('/admin/view_batch_type','BatchTypeController@show');
Route::get('/admin/delete_batch/{id}','BatchTypeController@destroy');


Route::get('/admin/add_registration','RegisterController@index');
Route::post('/admin/insert_registration','RegisterController@store');
Route::get('/admin/view_registration','RegisterController@show');
Route::get('/admin/delete_registration/{id}','RegisterController@destroy');


Route::get('/admin/add_batch_register','BatchRegisterController@index');
Route::post('/admin/insert_batch_register','BatchRegisterController@store');
Route::get('/admin/view_batch_register','BatchRegisterController@show');
Route::get('/admin/delete_batch_register/{id}','BatchRegisterController@destroy');
// error  


Route::get('/admin/ground_booking','GroundRegisterController@index');
Route::post('/admin/insert_ground_booking','GroundRegisterController@store');
Route::get('/admin/view_ground_booking','GroundRegisterController@show');
Route::get('/admin/delete_ground_booking/{id}','GroundRegisterController@destroy');



    
