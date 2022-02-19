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


// Authentication routes
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('vendor/voyager/vendor/import-excel-csv-form', '\App\Http\Controllers\LodgersImportController@importForm')->name('vendor.import');
    Route::post('/import-commit', '\App\Http\Controllers\LodgersImportController@import')->name('lodger.import');
    Route::get('/send-notification', [NotificationController::class, 'sendReportNotification']);});

// Include Wave Routes
Wave::routes();
