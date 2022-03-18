<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/about', function () {
    return "About Page";
});

Route::get('/contact', function () {
    return "Contact Page";
});

Route::get('/post/{id}', function($id) {
    return "This is post number  ". $id;
});

//Route::get('/insert', function(){
//
//    return DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'LARAVEL is the best thing that has happened to PHP']);
//
//});

//Route::get('/read', function() {
//
//    $results = DB::select('select * from posts where id =?', [1]);
//
//    foreach ($results as $result) {
//        return $result->title;
//    }
//
//});

//Route::get('/update', function(){
//
//    return DB::update('update posts set title = "title" where id = ?', [1]);
//
//});

//Route::get('/delete', function(){
//
//    return DB::delete('delete from posts where id = ?', [2]);
//
//
//});

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/

//Route::get('/find', function (){
//
//    $posts = Post::all();
//
//    foreach($posts as $post) {
//        return $post->title;
//    };
//
//});

//Route::get('/findwhere', function (){
//
//    return Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//
//
//});

//Route::get('/findmore', function (){
//
//    $posts = Post::findOrFail(3);
//    return $posts;
//
//});

//Route::get('/basicinsert', function (){
//
//    $post = new Post;
//
//    $post->title = 'New Eloquent title insert';
//    $post->content = "Wow elequent is really cool! Look at this content";
//
//    $post->save();
//
//});

//Route::get('/updaterecord', function (){
//
//    $post = Post::find(4);
//
//    $post->title = 'New Eloquent title insert number 2';
//    $post->content = "Wow elequent is really cool! Look at this content 2";
//
//    $post->save();
//
//});
//
//Route::get('/create', function(){
//
//    Post::create(['title'=>'the create method', 'content'=>'WOW I am learning a lot with PHP']);
//
//});

//Route::get('/update', function(){
//
//    Post::where('id', 5)->where('is_admin', 0)->update(['title'=>'new title', 'content'=>'this is the update version']);
//
//
//});


//Route::get('/delete', function (){
//
//
//    $post = Post::find(3);
//
//    $post->delete();
//
//    return 'Item deleted';
//
//
//});


//Route::get('/otherdeleteoption', function(){
//
//    return Post::destroy(6);
//
//
//});

Route::get('/softdelete', function(){

    Post::find(11)->delete();


});
