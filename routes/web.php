<?php use App\Post;

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

Route::get('/blog', 'PostController@index');
// Route::get('/post/create', 'PostController@create');
// Route::post('/post/store', 'PostController@store');

// Route::get('/post/{id}/', ['as' => 'post.detail', function($id) {
// 	echo "Post $id";
// 	echo "</br>";
// 	echo "Body post in ID $id";
// }]);

Route::resource('post', 'PostController');
Route::get('/insert' ,function () {
	// DB::insert('INSERT INTO posts (title, body, user_id) VALUES (?,?,?)', ['Belajar PHP dengan Laravel', 'Laravel the best framework', '1']);

	$data = [
		'title' => 'Disini isian title',
		'body' => 'Isian body untuk table posts',
		'user_id' => 2
	];
	DB::table('posts')->insert($data);
	echo "Data berhasil ditambah";
});

Route::get('/read', function () {
	// $query = DB::select('SELECT * FROM posts WHERE id= ?', [1]);
	$query = DB::table('posts')->SELECT('title', 'body')->WHERE('id', 1)->get();
	return var_dump($query);
});

Route::get('/update', function(){
	// $updated = DB::update('UPDATE posts SET title= "Update field title" WHERE id = ?', [1]);
	$data = [
		'title' => 'Isian title',
		'body' => 'Isian body baru'
	];
	$updated = DB::table('posts')->where('id', 1)->update($data);
	echo "Data berhasil diupdate";
});

Route::get('/delete', function () {
	// $delete = DB::delete('DELETE FROM posts WHERE id = ?', [1]);
	$delete = DB::table('posts')->where('id', 2)->delete();
	echo "Data Berhasil dihapus";
});

Route::get('/posts', function() {
	$posts = Post::all();
	return $posts;
});

Route::get('/find', function (){
	$post = Post::find(5);
	return $post;
});

Route::get('/findwhere', function () {
	$posts = Post::where('user_id', 2)->orderBy('id', 'desc')->take(1)->get();
	return $posts;
});