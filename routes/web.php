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

//User routes
//Main landing page
Route::get('/hassan', function (){
    return view('layouts.layout');
});

Route::get('/', 'Web\Landing\HomeController@landing')->name('landing');

// set cookie language
Route::get('/set-language/{lang}', 'Web\Landing\HomeController@setLanguage')->name('set.language')->where('lang', 'ar|en');

// Routes with lang prefix
Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => '(en|ar)'],
    'middleware' => 'lang'
], function() {
    // Landing page in lang
    Route::get('/', 'Web\Landing\HomeController@index')->name('home');

    // About pages
    Route::get('/about/{permalink}', 'Web\About\AboutController@index')->name('about');

    // Products for category page
    Route::get('/products/{category_id}', 'Web\Categories\ProductsController@index')->name('products');

    // Product page
    Route::get('/product/{permalink}', 'Web\Products\ProductsController@index')->name('product');
// Product all
    Route::get('/products/', 'Web\Products\ProductsController@Products')->name('products');
    // News page
    Route::get('/news', 'Web\News\NewsController@index')->name('news');

    // New page
    Route::get('/new/{permalink}', 'Web\News\NewsController@new')->name('new');

    // Jobs page
    Route::get('/jobs', 'Web\Jobs\JobsController@index')->name('jobs');

    // Job page
    Route::get('/job/{job_id}', 'Web\Jobs\JobsController@job')->name('job');

    // Contact page
    Route::get('/contact', 'Web\Contacts\ContactsController@index')->name('contact');
});


//Admin routes
Route::prefix('admin-panel')->group(function () {
  //Auth routes
  Route::get('/', 'Auth\LoginController@showLoginForm')->name('home.login');
  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('login', 'Auth\LoginController@login');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');

  // Password Reset Routes...
  Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset');


  Route::middleware('auth')->group(function () {
    //Dashboard
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/', 'Admin\DashboardController@index')->name('admin.home');

    //Admins
    Route::resource('/admins', 'Admin\AdminsController', ['except' => ['show']]);

    //Categories
    Route::resource('/categories', 'Admin\CategoriesController', ['except' => ['show']]);

    //Products
    Route::resource('/products', 'Admin\ProductsController', ['except' => ['show']]);

    //Products gallery
    Route::get('/product-gallery/{product_id}/show', 'Admin\ProductGalleryController@show')->name('show.product.gallery');
    Route::get('/product-gallery/{product_id}/create', 'Admin\ProductGalleryController@create')->name('create.product.gallery');
    Route::post('/product-gallery/{product_id}/store', 'Admin\ProductGalleryController@store')->name('store.product.gallery');
    Route::delete('/product-gallery/{image_id}/destroy', 'Admin\ProductGalleryController@destroy')->name('destroy.product.gallery');

    //Banners
    Route::resource('/banners', 'Admin\BannersController', ['except' => ['show']]);

    //Agents
    Route::resource('/agents', 'Admin\AgentsController', ['except' => ['show']]);

    //Jobs
    Route::resource('/jobs', 'Admin\JobsController', ['except' => ['show']]);

    //Jobs apply
    Route::resource('/applies', 'Admin\AppliesController', ['except' => ['create, store, edit, update']]);

    //News
    Route::resource('/news', 'Admin\NewsController', ['except' => ['show']]);

    //Settings
    Route::get('/setting', 'Admin\SettingController@index')->name('setting.index');
    Route::put('/setting', 'Admin\SettingController@update')->name('setting.update');

    //Mails
    Route::resource('{status}/mails', 'Admin\MailsController', ['except' => ['create', 'edit', 'update', 'store']]);
    Route::post('/mails/{mail_id}/reply', 'Admin\MailsController@reply')->name('mails.reply');

    //Pages
    Route::resource('/about', 'Admin\AboutController', ['except' => ['show']]);

    // Profile page
    Route::get('/profile', 'Admin\ProfileController@get')->name('admin.get.profile');
    Route::post('/profile', 'Admin\ProfileController@save')->name('admin.profile.save');
  });
});
