<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailController;
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
    $post = \App\Post::orderBy('created_at', "DESC")->limit(1)->get();
    $posts = \App\Post::orderBy('created_at', "DESC")->limit(3)->skip(1)->get();
    
    return view('pages.Mailos', [
        'firstPost'=> $post,
        'fourPosts'=> $posts    
    ]);
});

Route::get('/jaunumi', function () {       
    $post = \App\Post::orderBy('created_at', "DESC")->limit(1)->get();
    $posts = \App\Post::orderBy('created_at', "DESC")->skip(1)->take(PHP_INT_MAX)->get();

    return view('pages.jaunumi', [
        'onePost'=>$post,
        'restOfPosts'=>$posts
    ]);
});

Route::get('/kontakti', function () { 
    return view('pages.kontakti');
});    
Route::post('/kontakti', 'MailController@store');



Route::get('/par-mums', function () { 
    return view('pages.par-mums');
});

Route::get('/pakalpojumi', function () { 
    return view('pages.pakalpojumi');
});

Route::get('/pieraksts', function () { 
    return view('pages.pieraksts');
});

Route::get('/jaunumi/{id}', function ($id) {
    $post = \App\Post::find($id);
    $posts = \App\Post::get();

    if($post == null) {
        return abort(404);
    }
    return view('pages.jaunumi-item', [
        'post' => $post,
        'posts' => $posts
    ]);
});
