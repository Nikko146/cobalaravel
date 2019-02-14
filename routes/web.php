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

Route::get('/', function () {
    $a = 1;
    $b = 2;
    $c = $a + $b;
    return $c;
});

Route::get('/about', function() {
	return 'Hi, This about page';
})
