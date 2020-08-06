<?php

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

use Maatwebsite\Excel\Facades\Excel;
use Ramsey\Uuid\Uuid;

Route::get('/import', function (){
    Excel::import(new \App\Imports\BankImport(), public_path('/file/list_bank.xlsx'));
    return redirect('/');
});

Route::get('/', function () {
    $bank = \App\Bank::all();
    return view('index', compact('bank'));
});

Route::get('/infos/{id}', 'BankController@getInfo');

