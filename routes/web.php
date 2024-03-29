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
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

//Frontend Booking
Route::get('book/{id}',[BookController::class,'booknow']);
Route::get('booking/{id}',[BookController::class,'bookAppliance']);
Route::get('booking_item',[BookController::class,'booking_list'])->name('admin.booking.list');
//Route::get('orderpage',[BookController::class,'orderInfo'])->name('home.orderpage');
Route::post('order/orderinfo',[BookController::class,'storeOrders'])->name('StoreOrderinfo');
Route::get('order/cancel/{id}',[BookController::class,'orderCancel'])->name('admin.order.cancel');
Route::get('orderform',[BookController::class,'orderInfo'])->name('home.orderform');

//frontend provider order details
Route::get('/assignorder/{id}',[HomeController::class,'providerOrderDetails'])->name('provider.assignorder');

//provider status update form
  Route::get('/providerOrderstatus/{id}',[HomeController::class,'getStatusform'])->name('providerUpdateStatus');
  Route::put('/providerOrderstatus/update/{id}',[BookingController::class,'statusUpdate'])->name('providerstatus.update');



//payment

Route::get('payment',[PaymentController::class,'payment'])->name('home.payment');

// registration & login

Route::get('reg',[LoginController::class,'reg'])->name('customer.reg');
Route::get('provider_registration',[LoginController::class,'providerRegistration'])->name('provider.registration');
Route::post('provider/registration/post',[LoginController::class,'providerStore'])->name('provider.store');
Route::post('user/reg/post',[LoginController::class,'regStore'])->name('reg.store');
Route::get('customer/login',[LoginController::class,'login'])->name('customer.login');
Route::post('user/do/login',[LoginController::class,'doLogin'])->name('user.dologin');

//forget passwoard
Route::get('forgot-passward',[ForgotPasswordController::class,'forgotPass'])->name('home.forgotpasswoard');
Route::post('passwoard',[ForgotPasswordController::class,'postEmail'])->name('home.passwoard');

//resetpassword

 Route::get('reset-password/{token}',[ResetPasswordController::class,'getPassword']);
Route::post('updatePasswoard/',[ResetPasswordController::class,'updatePassword'])->name('home.updatePassword');



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
  Route::get('checkout',[Bookcontroller::class,'checkout'])->name('cart-checkout');

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
        return view('admin.pages.dashboard.AD_dashboard');
    })->name('admin.dashboard');
  

// admin logout
  Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');

//dashboard
  Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
  Route::get('/dashboard/chart',[ChartController::class,'pieChart']);
  


//service provider
  Route::get('/serviceProvider',[ServiceProviderController::class,'SP_dashboard'])->name('admin.serviceProvider.dashboard');
  Route::get('/serviceProvider/add',[ServiceProviderController::class,'add'])->name('admin.serviceProvider.add');
  Route::post('/sp/store',[ServiceProviderController::class,'store'])->name('admin.sp.store');
  Route::get('/s_provider/view/{sp_id}',[ServiceProviderController::class,'sprovider_view'])->name('admin.sprovider.view');
  Route::get('/s_provider/edit/{sp_id}',[ServiceProviderController::class,'sprovider_edit'])->name('admin.sprovider.edit');
  Route::put('/s_provider/update/{sp_id}',[ServiceProviderController::class,'sprovider_update'])->name('admin.sprovider.update');
  Route::get('/s_provider/delete/{sp_id}',[ServiceProviderController::class,'sprovider_delete'])->name('admin.sprovider.delete');

  Route::get('/change_status/{id}',[ServiceProviderController::class,'change_status'])->name('admin.sprovider.status');


// Assign Provider

Route::post('/assignProvider',[BookingController::class,'taskAssign'])->name('assignProvider');
Route::get('/assignProvider/delete/{id}',[BookingController::class,'deleteTaskAssign'])->name('assignProvider.delete');



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
 Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('admin.edit');
 Route::put('/update/{id}',[CategoryController::class,'update'])->name('admin.update');
 Route::get('/delete/{id}',[CategoryController::class,'remove'])->name('admin.remove');
 //booking
  Route::get('/booking',[BookingController::class,'booking'])->name('admin.booking');
  Route::get('/order',[BookingController::class,'order'])->name('admin.order');
  Route::get('/OrderInfo/{id}',[BookingController::class,'OrderDetails'])->name('admin.orderdetails');
  
  //order status update

  Route::get('/orderstatus/{id}',[BookingController::class,'getStatusform'])->name('admin.statusForm');
  Route::put('/status/update/{id}',[BookingController::class,'statusUpdate'])->name('status.update');


  

//Report

 Route::get('/billing',[BillingController::class,'bill'])->name('admin.bill');
//  Route::post('/report',[BillingController::class,'providerReport'])->name('admin.providerReport');


 //Customer
 Route::get('/customer',[CustomerController::class,'customer'])->name('admin.customer');

 //Rating
  Route::get('/rating',[RatingController::class,'rating'])->name('admin.rating');


});
});
