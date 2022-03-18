<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\TypelivreModel;

class TypelivreController extends Controller
{
    public function create()
    {
        return view('/livres.typelivre.typelivre');
    }

    public function createForSuperAdmin()
    {
        return view('/livres.typelivre.typelivres'); 
    }


    //fonction d'enregistrement
    public function store(Request $request)
    {

        try {
            $save = new TypelivreModel();
            $save->LibType = $request->typeLiv;
            $save->save();
            if ($save) {
                session()->flash('success', 'Enregistrement éffectué!');
            } else {
                session()->flash('ERREUR', 'Enregistrement échoué1');
            }
        } catch (\Exception $exception) {
            session()->flash('warning', $exception->getMessage());
        }
        return back()->withInput(); //->route('typelivre');
    }

    public function liste()
    {

        $Typelivres  = TypelivreModel::paginate('2');
        return view('/livres/typelivre/liste', compact('Typelivres'));
    }

    public function listeForAdmin()
    {
        $Typelivres  = TypelivreModel::paginate('2');
        return view('/livres/typelivre/listes', compact('Typelivres'));
    }
    public function listeForSuperAdmin()
    {
        $Typelivres  = TypelivreModel::paginate('2');
        return view('/livres/typelivre/listess', compact('Typelivres'));
    }
}
