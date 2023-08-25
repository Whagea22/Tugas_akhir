<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontand\DashboardController;
use App\Http\Controllers\Frontand\DataStatistikController;
use App\Http\Controllers\Frontand\PakanController;
use App\Http\Controllers\Frontand\ReportController;
use App\Http\Controllers\ProfileController as ControllersProfileController;

// Route::get('/', function () {
//     return view('dashboard/index');
// });

Route::get('/app', function () {
    return view('template/app');
});
// Dashboard //
Route::get('login', [AuthController::class, 'login']);

Route::group(['prefix' => 'admin'], function () {
    // Admin dashboard controller
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/front-and/dashboard', 'index');
        Route::get('/tampilApi', 'tampilApi');
        Route::get('/tampilSemuaApi','tampilSemuaApi');
        Route::get('/apiChart', 'apiChart');
        Route::get('/chartMenit', [DashboardController::class, 'chartMenit']);
        Route::post('/front-and/dashboard', 'store');
        Route::get('/front-and/dashboard/hapus/{Servo}', 'hapus');
        Route::put('update-pakan/{Servo}', 'editServo');

        Route::get('/front-and/dashboard/solusiphtinggi', 'phTinggi');
        Route::get('/front-and/dashboard/solusiphrendah', 'phRendah');
        Route::get('/front-and/dashboard/solusisuhutinggi', 'suhuTinggi');
        Route::get('/front-and/dashboard/solusisuhurendah', 'suhuRendah');
    });
    // Admin PH Controller
    Route::controller(PhAirController::class)->group(function () {
        Route::get('/front-and/ph-air', 'index');
    });
    // Admin Pakan ikan
    Route::controller(DataStatistikController::class)->group(function () {
        Route::get('/front-and/data-statistik', 'index');
        // Route::get('/front-and/data-statistik', 'chartMenit');
    });
    Route::controller(ReportController::class)->group(function () {
        Route::get('/front-and/report', 'index');
        Route::get('/front-and/report/exportByRange', 'exportByRange');
    });

});




