<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Obtenez l'ID de l'utilisateur actuellement connecté

        if ($userId === 1) {
            return view('home1.home');
        }

        if ($userId === 48) {
            return view('home48.home');
        }

        if ($userId === 16) {
            return view('home16.home');
        }

    }
}

