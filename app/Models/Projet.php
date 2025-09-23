<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    // Colonnes autorisées au remplissage en masse
    protected $fillable = [
        'titre',
        'description',
        'type',
        'images',
        'acquis',
        'technologies',
    ];

    // Indiquer à Laravel que "images" et "technologies" sont du JSON
    protected $casts = [
        'images' => 'array',
        'technologies' => 'array',
    ];
}
