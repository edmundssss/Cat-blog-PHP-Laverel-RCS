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
    return view('pages/index')->with(['page' => 'index']);
});
Route::get('/articles', function () {
    return view('pages/articles')->with(['page' => 'articles']);
});
Route::get('/article', function () {
    return view('pages/article')->with(['page' => 'article']);
});
Route::get('/registration', function () {
    return view('pages/registration')->with(['page' => 'registration']);
});
Route::get('/chat', function () {
    return view('pages/chat')->with(['page' => 'chat']);
});
Route::get('/about_us', function () {
    return view('pages/about_us')->with(['page' => 'about_us']);
});
Route::get('/404', function () {
    return view('pages/404')->with(['page' => '404']);
});

Route::post('/registration', 'AccountController@storeUser');

Route::post('/chat/save-message','AccountController@saveChatMessage');
Route::get('/chat/get-messages', 'AccountController@getChatMessage');



//Route::post('/registration', function (Request $request){
//    $rules = [
 //       'username' => 'required',
//        'first_name' => 'required',
//        'password' => 'required[min:8]same:password2'
//    ];
//    $validation = $request->validation($rules);
//    dd($validation);
//});




