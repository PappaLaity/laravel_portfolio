<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nom',
        'libelle',
        'description',
        'diplome',
        'ecole',
        'debut_formation',
        'fin_formation',
        'statut'
    ];
}
