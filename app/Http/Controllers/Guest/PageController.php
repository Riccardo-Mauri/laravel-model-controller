<?php
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie; // Importa il modello Movie
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();
        
        // Passa i film alla view 'home'
        return view('index', compact('movies'));
    }
}