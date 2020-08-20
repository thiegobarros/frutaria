<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $fillable = [
        'nome',
        'valor',
        'quantidade',
        'data_validade',
    ];
}
