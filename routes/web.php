<?php

use App\Http\Controllers\HomeController;
use App\Models\Task;
use Faker\Guesser\Name;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about','App\Http\Controllers\PageController@show')->name('pages.about');

Route::resource('posts', 'App\Http\Controllers\PostController', ['parameters'=>['posts'=> 'id']]);





// Route::get('/tasks', function () {
//     return view('index',[
//         'tasks' => Task::latest()->get() 
//     ]);
// })->name('tasks.index');

// Route::view('/tasks/create','create')
// ->name('tasks.create');


// Route::get('/tasks/{id}', function ($id) {
//    return view('show',[
//     'task' => $task = Task::findOrFail($id)
//  ]);
// })->name('tasks.show');

// Route::post('/tasks', function(Request $request){
//     $data = $request->validate([
//         'title'=>'required|max:255',
//         'description'=>'required',
//         'long_description'=>'required',
//     ]);
    
//      $task = new Task;
//      $task -> name= $data['title'];
//      $task -> description= $data['description'];
//      $task -> long_description= $data['long_description'];

//      $task ->save();

//      return redirect()->route('tasks.show', ['id' => $task->id]);
// })->name('tasks.store');

// Route::get('/',function(){
// });
// Route::get('/www',function(){
//     return 'Hello World';
// })->name('hello');
// Route::get('/user/{id}',function($id){
//     return 'User id is '.$id;
// });
// Route::get(('hallo'), function(){
//     return redirect()->route('hello');
// });
Route::fallback(function(){
    abort(404);
});
// Route::get('/home', function(){
//     $res = 2+3;
//     $name = 'Mihai';
//     return view('home' , compact('res','name'));
// })->name('home');
// Route::get('/contact',function(){
//     return view('contact');
// }); 
// Route::post('/send-email',function()
// {
//     if(!empty($_POST))
//     dump($_POST);
//     return 'send email';
// });
// Route::match(['post','get','put'],'/contact',function(){
//     if(!empty($_POST)){
//         dump($_POST);
//     }
// return view('contact');
// });
// Route::match(['post','get'],'/contact',function(){
//     if(!empty($_POST)){
//         dump($_POST);
//     }
// return view('contact');
// })->name('contact');


// Route::view('/test','test',['test'=>'Test_Data']);

// // Route::redirect('/about','/contact');
// // Route::redirect('/about','/contact',$status=301);
// // Route::permanentRedirect('/about','/contact');

// // Route::get('/post/{id}',function ($id){
// //     return "Post id is $id";
// // });
// // Route::get('/post/{id}/{slug}',function ($id,$slug){
// //     return "Post id is $id|$slug";
// // })->where(['id'=>'[0-9]+','slug'=>'[A-Za-z0-9-]+']);

// // Route::get('/post/{id}/{slug}',function ($id,$slug){
// //     return "Post id is $id|$slug";
// // });

// Route::prefix('admin')->name('admin.')->group(function() {

// Route::get('/post',function(){
//     return 'Posts Lists';
// });
// Route::get('/post/create',function(){
//     return 'Posts Lists Create';
// });
// Route::get('/post/{id}/edit',function($id){
//     return "Posts Lists $id Edit";
// })->name('post');
// });

// Route::get('/post/{id?}/{slug?}',function ($id,$slug=null){
//     return "Post id is $id|$slug";
// })->name('post');

// Route::fallback(function(){
//     return redirect()->route('home',);
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
