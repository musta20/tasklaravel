<?php

use Sadana\Notify\Http\Controllers\NotifySalesController;
use Sadana\Notify\Http\Controllers\NotifyTypeController;
use Sadana\Notify\Http\Controllers\SalesTypeController;
use Sadana\Notify\Http\Controllers\TasksController;
use Sadana\Notify\Http\Controllers\TasksNotifyController;


use Illuminate\Support\Facades\Route;




Route::group(['as' => 'admin.', 'middleware' => ['auth'], 'prefix' => 'admin'], function () {

    Route::group(['middleware' => ['permission:Task']], function () {

        Route::get('MainTask', [TasksController::class, 'MainTask'])->name('admin.MainTask');
        Route::get('ShowTask/{id}', [TasksController::class, 'ShowTask'])->name('admin.ShowTask');
        Route::post('EditTask/{id}', [TasksController::class, 'EditTask'])->name('admin.EditTask');


        Route::get('showMyNotifyTask/{type}', [TasksController::class,'showMyNotifyTask']);
        Route::get('editMyNotifyTask/{type}', [TasksController::class,'editMyNotifyTask']);
        Route::post('postMyNotifyTask/{id}', [TasksController::class,'postMyNotifyTask']);


        Route::get('showmysale/{type}', [TasksController::class,'showmysale']);
        Route::get('editmysale/{type}', [TasksController::class,'editmysale']);
        Route::post('postmysale/{id}', [TasksController::class,'postmysale']);




    });


    Route::group(['middleware' => ['permission:TaskMangment']], function () {

        Route::resource('Task', TasksController::class);
        
        Route::resource('NotifySales', NotifySalesController::class);
        
        Route::resource('SalesType', SalesTypeController::class);

        Route::resource('TasksNotify', TasksNotifyController::class);
        Route::get('ShowTasksNotify/{id}/{corpid}', [TasksNotifyController::class,'ShowTasksNotify'])->name('admin.ShowTasksNotify');
        Route::get('TasksNotify/add/{id}/{corpid}', [TasksNotifyController::class,'add'])->name('admin.ShowTasksNotify.add');
       
        Route::post('addCorpRecord/{id}', [CorpController::class,'addCorpRecord'])->name('admin.addCorpRecord');
        Route::get('addCorpRecordview/{id}', [CorpController::class,'addCorpRecordview'])->name('admin.addCorpRecordview');
        Route::get('CorpRecord/{id}', [CorpController::class,'CorpRecord'])->name('admin.CorpRecord');
        Route::post('putCorpRecord/{id}', [CorpController::class,'putCorpRecord'])->name('admin.putCorpRecord');


        
                
        Route::resource('Corp', CorpController::class);

        
        Route::resource('NotifyType', NotifyTypeController::class);
        
        Route::get('MenuTask', [TasksController::class,'MenuTask'])->name('admin.MenuTask');

    });


});


?>