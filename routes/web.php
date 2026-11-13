<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

$home = function () {
    $data = DB::table('table_home')->get();

    return view('home', [
        'home'  => $data->first(),                          
        'fokus' => $data->pluck('fokus')->implode(', '),    
    ]);
};

Route::get('/', $home);
Route::get('/home', $home);

Route::get('/about', function () {
    return view('about', [
        'pendidikan' => DB::table('table_about')->where('jenis', 'pendidikan')->orderByDesc('id')->get(),
        'pengalaman' => DB::table('table_about')->where('jenis', 'pengalaman')->get(),
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'blogs' => DB::table('table_blog')->orderByDesc('tanggal_terbit')->get(),
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'contacts' => DB::table('table_contact')->get(),
    ]);
});