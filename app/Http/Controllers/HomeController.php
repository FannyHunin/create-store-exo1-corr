<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $pkmnData = Pokemon::all();
        return view('pages.home', compact('pkmnData'));
    }

    public function create () {
        return view('pages.formulaire');
    }

    public function store (Request $request) {
        $newPkmn = new Pokemon;
        $newPkmn->nom = $request->nom;
        $newPkmn->type = $request->type;
        $newPkmn->level = $request->level;
        $newPkmn->save();
        return redirect()->back();
    }
}
