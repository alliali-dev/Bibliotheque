<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AuteurModel;

class LivreModel extends Model
{
    use HasFactory;
    protected $table = "livre";
    protected $filable = ['LibLivre', 'DatEdi', 'editeur_id', 'auteur_id', 'categorie_id', 'typelivre_id', 'image', 'document', 'created_at', 'updated_at',];


    //  Obtenir l'auteur du livre

    public function auteur()
    {
        return $this->belongsTo(AuteurModel::class);
    }

    // obtenir l'editeur
    public function editeur()
    {
        return $this->belongsTo(EditeurModel::class);
    }

// obtenir la catégorie
    public function categorie()
    {
        return $this->belongsTo(CategorieModel::class);
    }

// obtenir le type de livre
    public function typelivre()
    {
        return $this->belongsTo(TypelivreModel::class);
    }

}
