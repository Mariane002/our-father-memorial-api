<?php

use App\Http\Controllers\SimpleData;
use App\Mail\OurFatherMemorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return ('Hi test mic');
});

Route::post('/mailer',function(Request $request ){
    
   Mail::to('galinojester0603@gmail.com')->send(
    new OurFatherMemorial(
         $request->name,
         $request->email,
         $request->subjects,
         $request->messages,
   ));
   
   return response()->json(['message' => 'success']);
   
});