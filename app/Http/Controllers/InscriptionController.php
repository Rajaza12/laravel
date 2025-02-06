<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        $inscriptions = Inscription::all();
        return view('inscription\index', compact('inscriptions'));
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
    ]);

    Inscription::create($request->all());

    return redirect()->route('inscription.index')->with('success', 'Inscription réussie !');
}
}
