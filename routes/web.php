<?php

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
Route::view('/', 'welcome');
// Route::post('/about', function(){
//     $tasks = [
//         '1' => 'task1',
//         '2' => 'task2',
//         '3' => 'task3',
//     ];
//     return view('about', compact('tasks'));
// });
// Route::get('/show/{id}', function($id){
//     $tasks = [
//         '1' => 'task1',
//         '2' => 'task2',
//         '3' => 'task3',
//     ];

//     $task = $tasks[$id];

//     return view('show', compact('task'));
// });

// Route::get('/about', function(){
//     return view('about');
// });

// Route::post('/about', function(){
//     $name = $_POST['name'];
//     return view('about', compact('name'));
// });

// Route::post('/show', function(){
//     $name = $_POST['name'];
//     return view('show', compact('name'));
// });
Route::get('/about', function(){
    return view('about');
});
Route::post('/about', function(){
    return view('about');
});
Route::get('/information', function(){
    return view('information');
});
Route::post('/information', function(){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $edu = $_POST['edu'];
    return view('about', compact('name', 'age', 'edu'));
});
Route::view('/aboutus', 'aboutus');

Route::get('/aboutus', function(){
    $about = "Welcome in About us Page";
    return view('aboutus', compact('about'));
});