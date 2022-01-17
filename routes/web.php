<?php

use App\Http\Controllers\Backend\ServiceProviderController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\ApplianceController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BillingController;
use App\Http\Controllers\Backend\RatingController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CategoriesController;
use App\Http\Controllers\Frontend\BookController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\PaymentController;
use Illuminate\Support\Facades\Route;

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

//Frontend start

Route::get('home',[HomeController::class,'home'])->name('frontend.home');

Route::get('service_details',[HomeController::class,'service_details']);
Route::get('profile',[HomeController::class,'profile'])->name('home.profile');
Route::get('profile/edit/{id}',[HomeController::class,'profile_edit'])->name('home.profile.edit');
Route::get('userprofile',[HomeController::class,'userprofile'])->name('userprofile');
Route::get('allService',[HomeController::class,'allService'])->name('home.allService');
Route::get('category/{id}',[HomeController::class,'services'])->name('home.category.services');

//category
Route::get('category',[CategoriesController::class,'category'])->name('home.category');

//Booking
Route::get('book/{id}',[BookController::class,'booknow']);
Route::get('booking/{id}',[BookController::class,'bookAppliance']);
Route::get('location',[BookController::class,'book']);

//payment

Route::get('payment',[PaymentController::class,'payment'])->name('home.payment');

// registration & login

Route::get('reg',[LoginController::class,'reg'])->name('customer.reg');
Route::post('user/reg/post',[LoginController::class,'regStore'])->name('reg.store');
Route::get('customer/login',[LoginController::class,'login'])->name('customer.login');
Route::post('user/do/login',[LoginController::class,'doLogin'])->name('user.dologin');


Route::group(['middleware'=>['auth','user']],function (){
  Route::get('/', function () {
      return view('frontend.pages.home');
  })->name('customer.reg');
});

// Cart...
  Route::group(['middleware'=>'web_auth'],function(){
  Route::get('add-to-cart/{id}',[BookController::class,'addTocart'])->name('cart.add');
  Route::get('get-cart',[BookController::class,'getCart'])->name('cart.get');
  Route::get('clear-cart',[BookController::class,'clearCart'])->name('cart.clear');

});


Route::get('user/logout',[LoginController::class,'logout'])->name('user.logout');

//Searching..
Route::get('user/search',[HomeController::class,'searching'])->name('home.search');

// Frontend end


//Backend or Admin Pannel start.....

Route::group(['prefix'=>'/'],function (){

  
// Login for admin

  Route::get('/login',[AdminController::class,'login'])->name('admin.login');
  Route::post('/login',[AdminController::class,'doLogin'])->name('admin.doLogin');


  Route::group(['middleware'=>['auth','admin']],function (){
    Route::get('/', function () {
        return view('admin.pages.home');
    })->name('home');
  

// admin logout
  Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');

//dashboard
  Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');


//service provider
  Route::get('/serviceProvider',[ServiceProviderController::class,'SP_dashboard'])->name('admin.serviceProvider.dashboard');
  Route::get('/serviceProvider/add',[ServiceProviderController::class,'add'])->name('admin.serviceProvider.add');
  Route::post('/sp/store',[ServiceProviderController::class,'store'])->name('admin.sp.store');
  Route::get('/s_provider/view/{sp_id}',[ServiceProviderController::class,'sprovider_view'])->name('admin.sprovider.view');
  Route::get('/s_provider/edit/{sp_id}',[ServiceProviderController::class,'sprovider_edit'])->name('admin.sprovider.edit');


//services

 Route::get('/services',[ServiceController::class,'services'])->name('admin.services');
 Route::get('/services/add',[ServiceController::class,'add'])->name('admin.services.add');
 Route::post('/services/store',[ServiceController::class,'store'])->name('admin.service.store');
 Route::get('/services/view/{service_id}',[ServiceController::class,'service_details'])->name('admin.services.details');
 Route::get('/services/delete/{service_id}',[ServiceController::class,'service_delete'])->name('admin.services.delete');
 Route::get('/services/edit/{service_id}',[ServiceController::class,'service_edit'])->name('admin.services.edit');
 Route::put('/services/update/{id}',[ServiceController::class,'service_update'])->name('admin.services.update');



 //Appliance Services
 
 Route::get('/Appliance Services',[ApplianceController::class,'applianceServices'])->name('admin.applianceService');
 Route::post('/appliancService/store',[ApplianceController::class,'store'])->name('admin.applianceService.store');


 //category

 Route::get('/category',[CategoryController::class,'categories'])->name('admin.category');
 Route::get('/add',[CategoryController::class,'add'])->name('admin.add');
 Route::post('/store',[CategoryController::class,'store'])->name('admin.store');

 //booking
  Route::get('/booking',[BookingController::class,'booking'])->name('admin.booking');

//billing

 Route::get('/billing',[BillingController::class,'bill'])->name('admin.bill');

 //Customer
 Route::get('/customer',[CustomerController::class,'customer'])->name('admin.customer');

 //Rating
  Route::get('/rating',[RatingController::class,'rating'])->name('admin.rating');


});
});
