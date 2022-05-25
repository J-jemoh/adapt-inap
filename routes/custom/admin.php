<?php

use App\Http\Controllers\Admin\DashboardController;

Route::prefix('admin')->group(function(){
	Route::controller(DashboardController::class)->prefix('/dashboard')->group(function(){
		Route::get('/','index')->name('admin.dashboard');
		Route::get('/participants','participants_listing')->name('admin.participants');
		Route::get('/participants/add','participant_add')->name('admin.participants.add');
		Route::get('/barriers/categories','barrier_categories')->name('admin.barriers.categories');
		Route::get('/barriers/categories/add','add_categories')->name('admin.barriers.categories.add');
		Route::get('/barriers/list','barrier_list')->name('admin.barriers.list');
		Route::get('/barriers/add','barrier_add')->name('admin.barriers.add');
		Route::get('/locator/list','locator_list')->name('admin.locator.list');
	});

});


?>