<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $title = 'La signora in giallo';
    // $casi_risolti = ['Il Mistero di Cabot Cove', 'Un Delitto per Amore', 'Morte nella Cattedrale', 'Il Caso della Spia Scomparsa', 'Il Mistero del Falso Testamento'];
    $casi_risolti = [];
    return view('home', compact('title', 'casi_risolti'));
});
