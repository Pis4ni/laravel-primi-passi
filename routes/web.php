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
    $regards = ['Hello World!','How is goin?','What`s uuuuup!?'];
    $ascii = ['ฅ^•ﻌ•^ฅ','ʕ •ᴥ•ʔ','(｡•ﻌ•｡)'];
    $rand = rand(0,2);


    return view('hello', compact('regards','ascii','rand'));
})->name('hello');

Route::get('/sus', function () {
    $regards = ['Trick or treat, smell my feet!', 'Beware the dark of night!', 'Prepare for a frightful night!'];
    $ascii = ['↜(͛𖤐෴𖤐)͛ψ','⋆༺𓆩☠︎︎𓆪༻⋆','(¬_¬")'];
    $rand = rand(0,2);


    return view('hello-b', compact('regards','ascii','rand'));
})->name('hello-b');
