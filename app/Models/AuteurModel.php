<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuteurModel extends Model
{
    use HasFactory;
    protected $table = "auteur";
    protected $profilable = ['NomPrenAut', 'VilAut', 'created_at', 'updated_at',];

    /** 
     * Recupperer les livres de l'auteur.
     */
    
    // public function livres()
    // {
    //     return $this->hasMany(LivreModel::class, 'auteur_id');
    // }
}


