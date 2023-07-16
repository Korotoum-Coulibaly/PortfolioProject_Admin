<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\P_fonctionnel\UserController;
use App\Http\Controllers\P_fonctionnel\RuleController;
use App\Http\Controllers\P_fonctionnel\PermissionController;
use App\Http\Controllers\P_fonctionnel\CategoryController;
use App\Http\Controllers\P_fonctionnel\SubCategoryController;
use App\Http\Controllers\P_fonctionnel\PackController;
use App\Http\Controllers\P_fonctionnel\ProductController;
use App\Http\Controllers\P_fonctionnel\QuestionController;
use App\Http\Controllers\P_fonctionnel\AnswerController;
use App\Http\Controllers\P_devis\QuoteController;
use App\Http\Controllers\P_compte\ProfileController;
use App\Http\Controllers\P_acteur\OfficeController;
use App\Http\Controllers\P_acteur\ProspectController;


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
    return view('welcome');
});
Route::resource('usermanagement',UserController::class);
Route::resource('rulemanagement',RuleController::class);
Route::resource('permissionmanagement',PermissionController::class);
Route::resource('categorymanagement',CategoryController::class);
Route::resource('subcategorymanagement',SubCategoryController::class);
Route::resource('packmanagement',PackController::class);
Route::resource('productmanagement',ProductController::class);
Route::resource('questionmanagement',QuestionController::class);
Route::resource('answermanagement',AnswerController::class);
Route::resource('quotemanagement',QuoteController::class);
Route::resource('profilemanagement',ProfileController::class);
Route::resource('officemanagement',OfficeController::class);
Route::resource('prospectmanagement',ProspectController::class);

