<?php

use App\Http\Controllers\CorporateController;
use App\Http\Controllers\PicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(CorporateController::class)->group(function (){
    Route::get('corporate', 'getCorporate');
    Route::get('corporate/{id}', 'getCorporateById');
    Route::post('corporate', 'storeCorporate');
    Route::patch('corporate/{id}', 'updateCorporate');
    Route::delete('corporate/{id}', 'deleteCorporate');
});

Route::controller(PicController::class)->group(function (){
    Route::get('pic', 'getPic');
    Route::get('pic/{id}', 'getPicById');
    Route::post('pic', 'storePic');
    Route::patch('pic/{id}', 'updatePic');
    Route::delete('pic/{id}', 'deletePic');
});