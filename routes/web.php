<?php
Auth::routes();
Route::group(['namespace' => 'Admin', 'prefix' => 'admin','middleware'=>['auth:web']], function () {
Route::get('/', 'DashboardController@index')->name('dashboard');

Route::resource('product-category', 'ProductCategoryController');

Route::get('/product-category', 'ProductCategoryController@index')->name('admin.product-category');

Route::resource('product', 'ProductController');

Route::get('/products', 'ProductController@index')->name('admin.product');

});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/product', 'HomeController@productListing')->name('product');

Route::get('/productCategories', 'HomeController@productCategoryListing')->name('productCategories');

