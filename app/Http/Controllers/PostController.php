<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
    	$posts = [
		['id' => '1', 'title' => 'post 1', 'body' => 'Body post in ID 1'],
		['id' => '2', 'title' => 'post 2', 'body' => 'Body post in ID 2'],
		['id' => '3', 'title' => 'post 3', 'body' => 'Body post in ID 3'],
		['id' => '4', 'title' => 'post 4', 'body' => 'Body post in ID 4'],
	];

	echo '<ul>';
	foreach ($posts as $post) {
		echo '<li> <a href=" ' . route('post.detail', $post['id']) .'"> '. $post['title'] . '</a></li>';
	}
	echo '</ul>';
    }

    public function create() {
    	return view('create');
    }
}