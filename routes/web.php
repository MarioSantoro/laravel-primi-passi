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

    $data = [
        'name' => 'Mario',
        'surname' => 'Santoro',

        'listLink'  => ['Home', 'AboutUs', 'Contact']
    ];
    return view('home', $data);
})->name('Home');


Route::get('/aboutUs.blade.php', function () {

    $data = [
        'name' => 'Mario',
        'surname' => 'Santoro',

        'listLink'  => ['Home', 'AboutUs', 'Contact']
    ];
    return view('aboutUs', $data);
})->name('AboutUs');

Route::get('/contact.blade.php', function () {

    $data = [
        'name' => 'Mario',
        'surname' => 'Santoro',

        'listLink'  => ['Home', 'AboutUs', 'Contact']
    ];
    return view('contact', $data);
})->name('Contact');
