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
    return redirect('/about');
});

Route::get('/about', function() {
	return 'Hi, This about page';
});

Route::get('/blog', function () {
	$posts = [
		['title' => 'post 1', 'body' => 'Body post in ID 1'],
		['title' => 'post 2', 'body' => 'Body post in ID 2'],
		['title' => 'post 3', 'body' => 'Body post in ID 3'],
		['title' => 'post 4', 'body' => 'Body post in ID 4'],
	];

	echo '<ul>';
	foreach ($posts as $post) {
		echo '<li> <a href=""> '. $post['title'] . '</li>';
	}
	echo '</ul>';
});