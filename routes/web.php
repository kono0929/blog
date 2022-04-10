<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Tag;

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

// Route::get('/', function () {
//     //return view('welcome');
//     return "HELLO";
// });

//Route::get('/post/{id}', [PostController::class, 'index']); 

// Route::get('/about', function () {
//     //return view('welcome');
//     return "About me";
// });


// Route::get('/contact', function () {
//     //return view('welcome');
//     return "Hi this is contact page";
// });
// Route::get('/post/{id}/{name}', function ($id, $name) {
//     //return view('welcome');
//     return "Post number is: ". $id. " name: ". $name;
// });

// Route::get('admin/posts/example', array('as' => 'admin.home',function () {
//     $url = route('admin.home');
//     return "this is url:". $url;
// }));

//Route::resource('posts', [PostController::class, '']); 
// Route::resource('posts', PostController::class);
// Route::get('/contact', [PostController::class, 'contact']); 
// Route::get('/post/{id}/{name}/{job}', [PostController::class, 'show_post']); 

// Route::get('/insert', function(){
//     DB::insert('insert into posts (title, body, is_admin) values (?, ?, ?)', ['PHP test3', 'Laravel is cool framework yayyy!!!', 1]);
// });

// Route::get('/read', function(){
//     $results = DB::select('select * from posts');
//     //return $results;
//     return $results[0]->title;
//     // foreach($results as $post){
//     //     return $post -> title;
//     // }
//     //return var_dump($results);
// });

// Route::get('/update', function(){
//     $updated = DB::update('update posts set title = "Updated second title" where id = ?', [2]);
//     return $updated;
// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id = ?', [3]);
//     return $deleted;
// });
/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|
*/

// Route::get('/read', function(){
//     $posts = Post::all();
//     foreach($posts as $post){
//         return $post->title;
//     }
// });
// Route::get('/find', function(){
//     $post = Post::find(3);
//     $post->title = 'this is eloquent title updated!';
//     $post->save();
//         return $post->title;
// });
// Route::get('/findwhere', function(){
//     $post = Post::where('id', 1)->orderBy('id', 'desc')->take(1)->get();
//         return $post;
// });

// Route::get('/findMore', function(){
//     $post = Post::findOrFail(4);
//         return $post;

//     $post = Post::where('id', '>', 50)->firstOrFail();
//     return $post;
// });

// Route::get('/basicInsert', function(){

//     $post = new Post;
//     $post->user_id = '2';
//     $post->title = 'bbbbbbbb';
//     $post->body = 'bbbbbbbbbbbbbb';

//     $post->save();

// });

// Route::get('/create', function(){

//     Post::create(['user_id'=>'1', 'title'=>'the create method', 'body'=>'wow I\'m learning a lot with Edwin Diaz','is_admin'=>0]);
// });

// Route::get('/update', function(){

//     Post::where('is_admin', '0')->update(['title'=>'Admin update method', 'body'=>'Why am I tired all the time?']);
// });

// Route::get('/delete', function(){

//     $post = Post::find(2);
//     $post->delete();
// });

// Route::get('delete2', function(){

//     Post::destroy([3,5]);
//     //$post = Post::where('id', 3)->delete();
// });

// Route::get('/softdelete', function(){
//     Post::find(2)->delete();
// });

// // Route::get('/softread', function(){
// //     $posts = Post::onlyTrashed()->forceDelete();
// //     return $posts;
// // });

// Route::get('/restore', function(){
//     $posts = Post::onlyTrashed()->restore();
//     return $posts;
// });

// Route::get('/forceDelete', function(){
//     $posts = Post::onlyTrashed()->forceDelete();
//     return $posts;
// });

// /*
// |--------------------------------------------------------------------------
// | ELOQUENT RELATIONSHIPS
// |--------------------------------------------------------------------------
// |
// */

// // One to One relationship
// // Route::get('/user/{id}/post', function($id){

// //     return User::find($id)->post->title;
// // });

// // Route::get('/post/{id}/user', function($id){

// //     return Post::find($id)->user->name;
// // });

// // // One to Many relationship

// // Route::get('/posts', function(){

// //     $user = User::find(1);

// //     foreach ($user->posts as $post){

// //         echo $post->title.'<br>';
// //     }
// // });

// // many to many relationships

// // Route::get('/user/{id}/roles', function($id){

// //     $user = User::find($id)->roles()->orderby('id', 'desc')->get();
// //     return $user;

// //     // foreach ($user->roles as $role)
// //     // return $role->name;
// // });

// // Route::get('/roles/{id}/users', function($id){

// //     $user = User::find($id)->roles()->orderby('id', 'desc')->get();
// //     return $user;

// //     // foreach ($user->roles as $role)
// //     // return $role->name;
// // });

// Route::get('roles/pivot', function(){

//     $user = User::find(1);
//     foreach($user->roles as $role){
//         return $role->pivot;
//     }

// });

// Route::get('/user/country', function(){

//     $country = Country::find(4);
//     //return  $country->posts->title;

//     foreach ($country->posts as $post){
//         echo $post->title.'<br>';
//     }
// });

// // Polymorphic Relations

// Route::get('/user/photo', function(){

//     $user = User::find(1);

//     foreach($user->photos as $photo){

//         return $photo->path;
//     }
// });

// Route::get('/post/{id}/photo', function($id){

//     $post = Post::find($id);

//     foreach($post->photos as $photo){

//         echo $photo->path.'<br>';
//     }
// });

// Route::get('/photo/{id}/post', function($id){

//     $photo = Photo::findOrFail($id);

//     return $photo->imageable;
// });

// Route::get('/post/tag', function(){
//     $post = Post::find(1);

//     foreach($post->tags as $tag){
//         return $tag->name;
//     }
// });

// Route::get('/video/tag', function(){
//     $video = Video::find(2);

//     foreach($video->tags as $tag){
//         return $tag->name;
//     }
// });

// Route::get('/tag/post', function(){

//     $tag = Tag::find(2);

//     foreach($tag -> posts as $post){

//         return $post->title;
//     }
// });


/*
|--------------------------------------------------------------------------
| CRUDE APPLICATIONS
|--------------------------------------------------------------------------
|
*/

Route::resource('/posts', PostController::class);