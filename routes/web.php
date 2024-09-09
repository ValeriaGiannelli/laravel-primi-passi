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

    // casi risolti
    $casi_risolti = ['Il Mistero di Cabot Cove', 'Un Delitto per Amore', 'Morte nella Cattedrale', 'Il Caso della Spia Scomparsa', 'Il Mistero del Falso Testamento'];

    // se casi vuoti
    // $casi_risolti = [];

    // immagine per casi risolti
    $solved='https://movieplayer.net-cdn.it/t/images/2017/04/01/maxresdefault_jpg_363x200_crop_q85.jpg';

    // immagine per assenza di casi
    $waiting='https://movieplayer.net-cdn.it/t/images/2022/10/12/la-signora-in-giallo-angela-lansbury-6_jpg_375x0_crop_q85.jpg';
    return view('home', compact('title', 'casi_risolti', 'solved', 'waiting'));
});


// pagina di about
Route::get('/about', function () {

    // nome
    $name = 'Jessica (Beatrice) Fletcher';

    // immagine profilo
    $profile_picture = 'https://www.hallofseries.com/wp-content/uploads/2016/02/barney-jessica-1.png';

    // biografia
    $biografia = "Jessica Fletcher vive al 698 di Candlewood Lane, nella città di Cabot Cove, nel Maine.

        Inizia a scrivere per l'esigenza di distrarsi dalla perdita del marito; per caso esso perviene a un editore di New York che lo pubblica, facendone un best seller internazionale che la fa diventare un'autrice nota in tutto il mondo.

        L'acume di Jessica si riscontra, oltre che nei suoi romanzi, anche nella sua vita reale. In alcuni casi Jessica è obbligata dalle circostanze a risolvere il caso da sola, vista l'impossibilità di informare le forze dell'ordine, in altri invece sono proprio sceriffi e detective ad accettare il suo aiuto, alcuni convintisi dalle sue capacità, anche se in un primo momento seccati dalla sua presenza, altri invece fan e ammiratori dei suoi libri, entusiasti dal primo momento di collaborare con lei.

        Gli sceriffi con cui Jessica ha collaborato in più casi sono naturalmente quelli di Cabot Cove, Amos Tupper e Mort Metzger, anch'essi inizialmente recalcitranti ad averla sulla scena del crimine, ma poi ben felici di sentire il suo parere, e successivamente il tenente Artie Gelber della polizia di New York.";
    return view('about', compact('name', 'biografia', 'profile_picture'));
});
