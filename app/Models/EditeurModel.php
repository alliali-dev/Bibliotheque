<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditeurModel extends Model
{
    use HasFactory;
    protected $table="editeur";
    protected $fillable=['LibEd','created_at','updated_at',];

}
