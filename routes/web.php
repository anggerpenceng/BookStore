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

//initialized Controler

Route::resource('bookStore', 'Book');
Route::resource('category', 'BookCategory');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.main');
});

Route::get('/ManageBook', function() {
    $data['data_book'] = \App\M_BookStore::join('category_books','category_books.category_id' , '=' , 'book_stores.category_id')->get();
    return view('dashboard.manageBook', $data);
});


Auth::routes();

Route::get('/loginHome', 'LoginHome@index')->name('loginHome');
