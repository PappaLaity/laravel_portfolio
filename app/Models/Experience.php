<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nom',
        'entreprise',
        'lien_entreprise',
        'contrat',
        'outils',
        'debut_experience',
        'environnement',
        'fin_experience',
        'statut'
    ];
}
