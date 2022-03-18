<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypelivreModel extends Model
{
    use HasFactory;
    protected $table="typelivre";
    protected $profilable=['LibType','created_at','updated_at',];
}
