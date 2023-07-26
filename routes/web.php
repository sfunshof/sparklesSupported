<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\MiscellaneousController;
use Spatie\Honeypot\ProtectAgainstSpam;


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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [HomeController::class, 'index'] );
Route::get('contact', [ContactController::class, 'index'] );
Route::get('recruit', [RecruitController::class, 'index'] );
Route::get("about/faq", [AboutController::class, 'faq'] );
Route::get("about/ourmission", [AboutController::class, 'ourmission'] );
Route::get("about/ourvalues", [AboutController::class, 'ourvalues'] );
Route::get("about/whoweare", [AboutController::class, 'whoweare'] );
Route::get("about/whychooseus", [AboutController::class, 'whychooseus'] );
Route::get("about/areaswecover", [AboutController::class, 'areaswecover'] );
Route::get("about/about_all", [AboutController::class, 'about_all'] );
Route::get("services/personal", [ServicesController::class, 'personal'] );
Route::get("services/specialist", [ServicesController::class, 'specialist'] );
Route::get("services/palliative", [ServicesController::class, 'palliative'] );
Route::get("services/dementia", [ServicesController::class, 'dementia'] );
Route::get("services/support", [ServicesController::class, 'support'] );
Route::get("services/elderly", [ServicesController::class, 'elderly'] );
Route::get("services/respite", [ServicesController::class, 'respite'] );
Route::get("services/hospital", [ServicesController::class, 'hospital'] );
Route::get("services/livein", [ServicesController::class, 'livein'] );
Route::get("services/services_all", [ServicesController::class, 'services_all'] );
Route::post('contact/post', [ContactController::class, 'contact_post'] );
Route::get('recruit/workers', [RecruitController::class, 'workers'] );
Route::get('recruit/livein', [RecruitController::class, 'livein'] );
Route::get('recruit/coordinator', [RecruitController::class, 'coordinator'] );
Route::get('recruit/applyform', [RecruitController::class, 'applyform'] );
Route::post('recruit/post', [RecruitController::class, 'apply_post'] );
Route::post('miscellaneous/post', [MiscellaneousController::class, 'callback_post'] );

Route::get('miscellaneous/terms', [MiscellaneousController::class, 'terms'] );
Route::get('miscellaneous/privacy', [MiscellaneousController::class, 'privacy'] );
Route::get('miscellaneous/covid19', [MiscellaneousController::class, 'covid19'] );