<?php
use App\Http\Controllers\Backend\ServiceProviderController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BillingController;
use App\Http\Controllers\Backend\RatingController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('home',[HomeController::class,'home']);


// Frontend end

//Admin start.....
Route::get('/', function () {
    return view('admin.index');
});

//dashboard
Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');


//service provider
Route::get('admin/serviceProvider',[ServiceProviderController::class,'SP_dashboard'])->name('admin.serviceProvider.dashboard');
Route::get('admin/serviceProvider/add',[ServiceProviderController::class,'add'])->name('admin.serviceProvider.add');
Route::post('admin/sp/store',[ServiceProviderController::class,'store'])->name('admin.sp.store');

//services

 Route::get('admin/services',[ServiceController::class,'services'])->name('admin.services');
 Route::get('admin/services/add',[ServiceController::class,'add'])->name('admin.services.add');
 Route::post('admin/services/store',[ServiceController::class,'store'])->name('admin.service.store');

//category

 Route::get('admin/category',[CategoryController::class,'categories'])->name('admin.category');
 Route::get('admin/add',[CategoryController::class,'add'])->name('admin.add');
 Route::post('admin/store',[CategoryController::class,'store'])->name('admin.store');

 //booking
  Route::get('admin/booking',[BookingController::class,'booking'])->name('admin.booking');

//billing

 Route::get('admin/billing',[BillingController::class,'bill'])->name('admin.bill');

 //Customer
 Route::get('admin/customer',[CustomerController::class,'customer'])->name('admin.customer');

 //Rating
  Route::get('admin/rating',[RatingController::class,'rating'])->name('admin.rating');