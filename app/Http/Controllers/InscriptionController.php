<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class InscriptionController extends Controller
{
    public function index()
    {
        if (!session('user_id')) {
           return redirect()->route('login')->with('error', 'Veuillez vous connecter pour accéder à cette page.');
       }
    
        $inscriptions = Inscription::all();
        return view('inscriptions\index', compact('inscriptions'));
    }
    

    public function create()
    {
        return view('inscription\create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:inscriptions,email',
            'telephone' => 'required|string|max:15',
            'password' => 'required|string|confirmed|min:8',  // Validation du mot de passe
        ]);
    
        Inscription::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),  // Hashage du mot de passe
        ]);
    
        return redirect()->route('login')->with('success', 'Inscription réussie ! Veuillez vous connecter.');
    }
    
}
