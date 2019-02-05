<?php
;
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

Route::resource('test', 'CarController');

Route::get('mongo', function(Request $request) {
    $collection = Mongo::get()->controles->test;
    return $collection->find()->toArray();
});
