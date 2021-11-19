<?php
use App\Http\Controllers\Backend\ServiceProviderController;
use App\Http\Controllers\Backend\AdminController;
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

Route::get('/', function () {
    return view('admin.index');
});

//dashboard
Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');


//service provider
Route::get('admin/serviceProvider',[ServiceProviderController::class,'SP_dashboard'])->name('admin.serviceProvider.dashboard');
Route::get('admin/add',[ServiceProviderController::class,'add'])->name('admin.serviceProvider.add');
Route::post('admin/store',[ServiceProviderController::class,'store'])->name('admin.sp.store');
