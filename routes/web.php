<?php

use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('salaryEmail', function () {

    $details = [
        'title' => 'Mock',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('rkrumova97@gmail.com')->send(new MyTestMail($details));

    return "Email is Sent.";
});
