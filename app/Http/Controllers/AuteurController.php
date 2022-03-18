<?php

namespace App\Http\Controllers;

use App\Models\AuteurModel;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    //

    public function create()
    {
        $Auteurs = AuteurModel::all();
        return view('/auteurs.auteur', compact('Auteurs'));
    }

    public function createForSuperAdmin()
    {
        $Auteurs = AuteurModel::all();
        return view('/auteurs.auteurs', compact('Auteurs'));
    }

    public function store(Request $request)
    {

        try {
            $auteur = new AuteurModel();
            $auteur->NomPrenAut = $request->nomaut;
            $auteur->VilAut = $request->VilAut;
            $auteur->save();

            if ($auteur) {
                session()->flash('success', 'Enregistrement éffectué!');
            }
        } catch (\Exception $exception) {
            session()->flash('warning', $exception->getMessage());
        }
        return back();
    }

    public function liste()
    {
        $Auteurs = AuteurModel::paginate('10');
        return view('/auteurs.liste', compact('Auteurs'));
    }

    public function listeForAdmin()
    {

        $Auteurs = AuteurModel::paginate('10');
        return view('/auteurs.listess', compact('Auteurs'));
    }

    public function listeForSuperAdmin()
    {

        $Auteurs = AuteurModel::paginate('10');
        return view('/auteurs.listes', compact('Auteurs'));
    }
}
