<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'quantidade_fruta',
        'valor',
    ];

    public function fruit()
    {
        return $this->hasOne('App\Models\Fruit');
    }

    public function client()
    {
        return $this->hasOne('App\Models\Client');
    }
}
