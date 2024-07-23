<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'specie',
        'razza',
        'eta',
        'sesso',
        'colore',
        'peso',
        'altezza',
        'url_img',
        'note'
    ];
}