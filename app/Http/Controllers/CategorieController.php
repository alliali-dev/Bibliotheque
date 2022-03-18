<?php

namespace App\Http\Controllers;

use App\Models\CategorieModel;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //

    public function create()
    {
        $Categories = CategorieModel::all();
        return view('livres/categories/categorie', compact('Categories'));
    }

    public function createForSuperAdmin()
    {
         $Categories = CategorieModel::all();
        return view('livres/categories/categories', compact('Categories'));
    }

    public function store(Request $request)
    {

        try {
            $save = new CategorieModel();

            $save->LibCat = $request->libcat;
            $save->save();
            if ($save) {
                session()->flash('success', 'Enregistrement éffectué!');
            } else {
                session()->flash('ERREUR', 'Enregistrement échoué1');
            }
        } catch (\Exception $exception) {
            session()->flash('warning', $exception->getMessage());
        }
        return back(); 
    }

    public function liste()
    {
        $Categories = CategorieModel::paginate('5');
        return view('/livres/categories.liste', compact('Categories'));
    }

    public function listeForAdmin()
    {
        $Categories = CategorieModel::paginate('5');
        return view('/livres/categories.listes', compact('Categories'));
    }
    public function listeForSuperAdmin()
    {
        $Categories = CategorieModel::paginate('5');
        return view('/livres/categories.listess', compact('Categories'));
    }
}
