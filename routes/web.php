<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Post;

// HOME
Route::get('/', function () {
    $data = DB::table('table_home')->get();
    return View::make('home', [
        'home' => $data->first(),
        'fokus' => $data->pluck('fokus')->implode(', '),
    ]);
});

Route::get('/home', function () {
    $data = DB::table('table_home')->get();
    return View::make('home', [
        'home' => $data->first(),
        'fokus' => $data->pluck('fokus')->implode(', '),
    ]);
});

// ABOUT
Route::get('/about', function () {
    $pendidikan = DB::table('table_about')
        ->where('jenis', 'pendidikan')
        ->orderByDesc('id')
        ->get();
    $pengalaman = DB::table('table_about')
        ->where('jenis', 'pengalaman')
        ->get();
    return View::make('about', [
        'pendidikan' => $pendidikan,
        'pengalaman' => $pengalaman,
    ]);
});

// BLOG
Route::get('/blog', function () {
    $blogs = DB::table('table_blog')
        ->orderByDesc('tanggal_terbit')
        ->get();
    return View::make('blog', [
        'blogs' => $blogs,
    ]);
});

// CONTACT
Route::get('/contact', function () {
    $contacts = DB::table('table_contact')->get();
    return View::make('contact', [
        'contacts' => $contacts,
    ]);
});

// DATA
Route::get('/data', function () {
    $posts = Post::orderBy('id')->get();
    return View::make('data', [
        'posts' => $posts,
    ]);
});