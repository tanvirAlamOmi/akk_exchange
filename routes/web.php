<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Web\BoAccountController;
use App\Http\Controllers\Auth\LoginController;
Route::get('/notices/{id}', [WebController::class, 'notice_show'])->name('notice-show');

Route::get('/clear-parasites', function () {
    $exitCode = Artisan::call('optimize:clear');
    return back();
});

// Route::get('/', function () {
//     return view('welcome');
// });

// public routes
Route::middleware(['auth'])->group(function () {
    Route::get('/view-bo-account', [WebController::class, 'view_bo_account'])->name('view-bo-account');
    Route::get('/user-profile', [WebController::class, 'user_profile'])->name('user-profile');
}); 

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/open-bo-account/{slug}', [BoAccountController::class, 'open_bo_account'])->name('open-bo-account');
Route::get('/open-bo-account/{slug}/{code}', [BoAccountController::class, 're_open_bo_account'])->name('re-open-bo-account');
Route::post('/submit-bo-form', [BoAccountController::class, 'submit_bo_form'])->name('submit-bo-form');
Route::post('/search-by-mobile', [BoAccountController::class, 'search_by_mobile'])->name('search-by-mobile');
Route::post('/search-by-reference', [BoAccountController::class, 'search_by_reference'])->name('search-by-reference');
Route::get('/', [WebController::class, 'home'])->name('/');
Route::get('/{slug}', [WebController::class, 'page'])->name('page');
Route::get('/home', [WebController::class, 'home'])->name('home');
Route::get('/about-us', [WebController::class, 'about_us'])->name('about-us');
Route::post('/contact-us', [WebController::class, 'contact_message_store'])->name('contact_message_store');
Route::post('/profile-update', [WebController::class, 'profile_update'])->name('profile-update');

 
Route::get('/view-bo-form/{id}', [BoAccountController::class, 'view_bo_form'])->name('bo-form.client.view');
Route::get('/download-bo-form/{id}', [BoAccountController::class, 'download_bo_form'])->name('bo-form.client.download');
Auth::routes();



// dashboard routes

require __DIR__ . '/dashboard.php';
