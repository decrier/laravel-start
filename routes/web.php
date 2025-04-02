<?php

use App\Http\Controllers\InfosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return 'Login';
});

Route::get('/user/{name}', function($name) {
    return 'Hallo ' . $name;
});

Route::get('/data', function() {
    return ['firstname' => 'Jorg', 'lastname' => 'Aderhold'];
});

// rgf !!!!!!
Route::get( '/user', function() {
    $id = request('id');
    return 'Hallo, Deine ID lautet: ' . $id;
});

// Phase 2

Route::get( '/user', function() {
    $id = request('id');
    return view ('user', [
        'id' => $id
    ]);
});

// Phase 3

Route::get( '/infos', [InfosController::class, 'show']);

// Arbeit mit Views
Route::get( '/kommentar', function() {
    $comment = 'Hier ist alles <strong>super!</strong>';
    return view ('comments', [
        'comment' => $comment,
        'songs' => 3,
        'loggedIn' => false
    ]);
});

/* === Master- / Child-Templates
============================================================================================= */
Route::get( '/child', function() {
    return view ('child');
});

Route::get( '/sibling', function() {
    return view ('sibling');
});

Route::get( '/login', function() {
    return view ('u1-login', [
        'content' => 'Bitte einloggen'
    ]);
});

Route::get( '/logout', function() {
    return view ('u1-logout', [
        'content' => 'Logout erfolgreich'
    ]);
});

Route::get( '/register', function() {
    return view ('u1-register', [
        'content' => 'Registration'
    ]);
});

Route::get( '/start', function() {
    return view ('u1-start', [
        'content' => 'Willkommen auf unserer Seite'
    ]);
});

/* === Komponenten
============================================================================================= */
// klassisch
Route::get( '/card', function() {
    return view('component-1');
});

Route::get( '/card', function() {
    return view('component-2');
});

// Übungen
Route::get( '/portfolio', function() {
    return view ('u2-portfolio', [
        'card_header' => 'Portfolio-Card Header',
        'card_title' => 'Portfolio-Card Title',
        'card_text' => 'Portfolio-Card Text'
    ]);
});

Route::get( '/service', function() {
    return view('u2-service', [
        'card_header' => 'Service-Card Header',
        'card_title' => 'Service-Card Title',
        'card_text' => 'Service-Card Text'
    ]);
});
