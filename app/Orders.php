<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'arrival', 'departure', 'guests', 'guest_user_id', 'descriptions', 'room_id',
    ];

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
