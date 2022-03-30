<?php

use App\Http\Controllers\EquipController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


    Route::group(['middleware' => 'web'], function () {
    Route::get('/equips',[EquipController::class,'index'])->name('equip.index');
    Route::get('/equips/create', [EquipController::class, 'create'])->name('equip.create');
    Route::get('/equips/edit/{id}',[EquipController::class, 'edit'])->name('equip.edit');
    Route::put('/equips/{id}',[EquipController::class,'update'])->name('equip.update');
    Route::post('/equips', [EquipController::class, 'store'])->name('equip.store');
    Route::delete('/equips/{id}', [EquipController::class, 'destroy'])->name('equip.destroy');

    Route::get('/home',[HomeController::class,'index'])->name('home.index');
    });