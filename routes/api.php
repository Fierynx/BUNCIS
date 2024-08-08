<?php

use App\Http\Controllers\CorporateController;
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