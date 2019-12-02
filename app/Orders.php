<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'arrival', 'departure', 'guests', 'mainguestName', 'descriptions', 
    ];
}
