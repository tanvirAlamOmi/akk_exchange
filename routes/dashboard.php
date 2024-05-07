<?php

use App\Http\Controllers\Dashboard\BoAccountController;
use App\Http\Controllers\Dashboard\ContactMessageController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\NoticeController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\Settings\MenuController;
use App\Http\Controllers\Dashboard\Settings\PageController;
use App\Http\Controllers\Dashboard\Settings\SectionController;
use App\Http\Controllers\Dashboard\Content\TextContentController;
use App\Http\Controllers\Dashboard\Content\ImageContentController;
use App\Http\Controllers\Dashboard\Content\FileContentController;
use App\Http\Controllers\Dashboard\Content\VideoContentController;

Route::group(['prefix' => 'dashboard','middleware' => ['auth', 'dashboard']], function () {
	Route::get('/index', [DashboardController::class, 'dashboard'])->name('dashboard');
	Route::get('/app-info', [DashboardController::class, 'app_info'])->name('app-info');
	Route::resource('users', UserController::class);
	Route::resource('menus', MenuController::class);
	Route::resource('pages', PageController::class);
	Route::resource('sections', SectionController::class);
	Route::resource('text-contents', TextContentController::class);
	Route::resource('image-contents', ImageContentController::class);
	Route::resource('file-contents', FileContentController::class);
	Route::resource('video-contents', VideoContentController::class);

	Route::post('sections/update-heading', [SectionController::class, 'update_heading'])->name('sections.update-heading');

	Route::post('image-contents/status/{id}', [ImageContentController::class, 'status'])->name('image-contents.status');

	Route::post('text-contents/status/{id}', [TextContentController::class, 'status'])->name('text-contents.status');
	
	Route::resource('notices', NoticeController::class);
	Route::post('/notices/active', [NoticeController::class, 'setActiveStatus'])->name('notices.set-active');
	Route::post('/notices/inactive', [NoticeController::class, 'setInactiveStatus'])->name('notices.set-inactive');
	
	Route::get('/popup-edit', [DashboardController::class, 'popupEdit'])->name('popup.edit');
	Route::patch('/popup-update', [DashboardController::class, 'popupUpdate'])->name('popup.update');

	Route::resource('/contact-messages', ContactMessageController::class);
	Route::post('/contact-messages/active', [ContactMessageController::class, 'setActiveStatus'])->name('contact-messages.set-active');
	Route::post('/contact-messages/inactive', [ContactMessageController::class, 'setInactiveStatus'])->name('contact-messages.set-inactive');

	
	Route::resource('/application-center', BoAccountController::class);
	Route::post('/check-bo-form', [BoAccountController::class, 'check_bo_form'])->name('check-bo-form');

	Route::get('/view-bo-form/{id}', [BoAccountController::class, 'view_bo_form'])->name('bo-form.view');
	Route::get('/download-bo-form/{id}', [BoAccountController::class, 'download_bo_form'])->name('bo-form.download');

});
