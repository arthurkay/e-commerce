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

Route::get('/', 'MainController@index')->name('home');
Route::get('/team', 'MainController@team')->name('team');
Route::get('/services', 'MainController@services')->name('services');
Route::get('/gallery', 'MainController@gallery')->name('gallery');
Route::get('/contact', 'MainController@contact')->name('contact');
Route::get('/company', 'MainController@company')->name('company');
//Route::get('/news', 'MainController@news')->name('news');
Route::get('/news/{title}/{id}', 'MainController@view_blog')->name('view_blog');
Route::get('/news', 'MainController@blog_list')->name('blog_list');
Route::post('/message_store', 'Admin\MainController@message_store')->name('message_store');
Route::get('policies', 'MainController@policies')->name('policies');
Route::get('/products', 'MainController@products')->name('products');
Route::get('/products/{id}/{title}', 'MainController@productDetails')->name('productDetails');

//Admin Panel

Route::group(['prefix' => 'admin',  'middleware' => ['auth']], function ()
{
	Route::get('/blog', 'Admin\MainController@blog')->name('blog');
	Route::get('/', 'Admin\MainController@index')->name('AdminHome');
	Route::post('/addNews', 'Admin\MainController@addNews')->name("addNews");
	Route::get('/blogs', 'Admin\MainController@blogs')->name('blogs');
	Route::get('/deleteBlog/{id?}', 'Admin\MainController@deleteBlog')->name('deleteBlog');
	Route::get('/blog_edit/{id}', 'Admin\MainController@blog_edit')->name('blog_edit');
	Route::post('/editBlogs', 'Admin\MainController@editBlogs')->name('editBlogs');
	Route::get('/read_msg', 'Admin\MainController@read_msg')->name('read_msg');
	Route::get('/read/{id}', 'Admin\MainController@read')->name('read');
	Route::get('/deleteMsg/{id}', 'Admin\MainController@delete')->name('deleteMsg');
	Route::get('/settings', 'Admin\MainController@settings')->name("settings");
	Route::post('/passChange', 'Admin\MainController@passChange')->name('passChange');
	Route::get('product', 'Admin\MainController@product')->name('product');
	Route::get('/newproduct', 'Admin\MainController@newProduct')->name('newProduct');
	Route::get('/viewproducts', 'Admin\MainController@viewProducts')->name('viewProducts');
	Route::post('addProduct', 'Admin\MainController@addProduct')->name('addProduct');
	Route::get('company-profile', 'Admin\MainController@profile')->name('profile');
	Route::get('edit-product/{id}', 'Admin\MainController@editProduct')->name('editProduct');
	Route::get('delete-product/{id?}', 'Admin\MainController@deleteProduct')->name('deleteProduct');
	Route::get('edit-product-images/{id}', 'Admin\MainController@productImages')->name('productImages');
	Route::post('save-changes', 'Admin\MainController@saveProduct')->name('saveProduct');
	Route::post('save-product-images', 'Admin\MainController@saveProductImages')->name('saveProductImages');
	Route::get('delete-image/{id?}', 'Admin\MainController@deleteImage')->name('deleteImage');
});

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', 'MainController@index');
