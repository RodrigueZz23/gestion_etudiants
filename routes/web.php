<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::get('/', [AuthController::class, 'welcome'])->name('welcome');

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::get('/schooling', function () {
    return view('schooling');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/news', function () {
    return view('news');
});

//results


Route::get('/results1', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 1) {
        return view('results1.results');
    }
});

Route::get('/results16', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 16) {
        return view('results16.results');
    }
});

Route::get('/results20', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 20) {
        return view('results20.results');
    }
});

Route::get('/results22', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 22) {
        return view('results22.results');
    }
});

Route::get('/results24', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 24) {
        return view('results24.results');
    }
});

//schooling


Route::get('/schooling1', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 1) {
        return view('schooling1.schooling');
    }
});

Route::get('/schooling16', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 16) {
        return view('schooling16.schooling');
    }
});

Route::get('/schooling20', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 20) {
        return view('schooling20.schooling');
    }
});

Route::get('/schooling22', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 22) {
        return view('schooling22.schooling');
    }
});

Route::get('/schooling24', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 24) {
        return view('schooling24.schooling');
    }
});

//home

Route::get('/home1', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 1) {
        return view('home1.home');
    }
});

Route::get('/home16', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 16) {
        return view('home16.home');
    }
});

Route::get('/home48', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 48) {
        return view('home48.home');
    }
});

Route::get('/home22', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 22) {
        return view('home22.home');
    }
});

Route::get('/home24', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 24) {
        return view('home24.home');
    }
});

//news


Route::get('/news1', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 1) {
        return view('news1.news');
    }
});

Route::get('/news16', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 16) {
        return view('news16.news');
    }
});

Route::get('/news20', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 20) {
        return view('news20.news');
    }
});

Route::get('/news22', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 22) {
        return view('news22.news');
    }
});

Route::get('/news24', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 24) {
        return view('news24.news');
    }
});


//schedule


Route::get('/schedule1', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 1) {
        return view('schedule1.schedule');
    }
});


Route::get('/schedule16', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 16) {
        return view('schedule16.schedule');
    }
});


Route::get('/schedule20', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 20) {
        return view('schedule20.schedule');
    }
});


Route::get('/schedule22', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 22) {
        return view('schedule22.schedule');
    }
});

Route::get('/schedule24', function () {
    $userId = auth()->id(); // Obtenez l'ID de l'utilisateur actuellement connecté

    if ($userId === 24) {
        return view('schedule24.schedule');
    }
});














