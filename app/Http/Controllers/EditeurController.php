<?php

namespace App\Http\Controllers;

use App\Models\EditeurModel;
use Illuminate\Http\Request;

class EditeurController extends Controller
{
    //

    public function create()
    {
        $Editeurs = EditeurModel::all();
        return view('/editeurs.editeur', compact('Editeurs'));
    }

    public function createForSuperAdmin()
    {
        $Editeurs = EditeurModel::all();
        return view('/editeurs.editeurs', compact('Editeurs'));
    }

    public function store(Request $request)
    {

        try {
            $editeur = new EditeurModel();

            $editeur->LibEd = $request->libedi;
            $editeur->save();
            if ($editeur) {
                session()->flash('success', 'Enregistrement éffectué!');
            } else {
                session()->flash('ERREUR', 'Enregistrement échoué1');
            }
        } catch (\Exception $exception) {
            return session()->flash('warning', $exception->getMessage());
        }
        return back();
    }

    public function liste()
    {
        $Editeurs = EditeurModel::paginate('10');
        return view('/editeurs.liste', compact('Editeurs'));
    }

    public function listeForAdmin()
    {

       $Editeurs = EditeurModel::paginate('10');
        return view('/editeurs.listess', compact('Editeurs'));
    }

    public function listeForSuperAdmin()
    {
            $Editeurs = EditeurModel::paginate('10');
        return view('/editeurs.listes', compact('Editeurs'));
    }
}
