<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BatchController;
use App\Http\Controllers\Admin\BreedsController;
use App\Http\Controllers\Admin\CattleController;
use App\Http\Controllers\Admin\CattleTypeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FarmController;
use App\Http\Controllers\Admin\PartyController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SessionYearController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\TaxController;
use App\Http\Controllers\Admin\UnitController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class,'index'])->name('dashboard');

//Admin
//Route::get('/admins/trashed',[AdminController::class,'trashed_list'])->middleware('permission:admin_manage')->name('admins.trashed');
//Route::get('/admins/trashed/{admin}/restore',[AdminController::class,'restore'])->middleware('permission:admin_manage')->name('admins.restore');
//Route::get('/admins/trashed/{admin}/delete',[AdminController::class,'force_delete'])->middleware('permission:admin_manage')->name('admins.force_delete');
//Route::resource('/admins',AdminController::class)->middleware('permission:admin_manage');
//
////Profile
//Route::get('/profile',[AdminController::class,'profile'])->name('profile');
//Route::post('/profile',[AdminController::class,'profile_update'])->name('profile_update');


//Vat
//Route::get('/taxes/trashed',[TaxController::class,'trashed_list'])->middleware('permission:tax_manage')->name('taxes.trashed');
//Route::get('/taxes/trashed/{tax}/restore',[TaxController::class,'restore'])->middleware('permission:tax_manage')->name('taxes.restore');
//Route::get('/taxes/trashed/{tax}/delete',[TaxController::class,'force_delete'])->middleware('permission:tax_manage')->name('taxes.force_delete');
//Route::resource('/taxes',TaxController::class)->middleware('permission:tax_manage');
