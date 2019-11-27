<?php

namespace App;

use App\Room;
use Illuminate\Database\Eloquent\Model;

class RoomImages extends Model
{
    //
    Protected $fillable = ['room_id', 'image'];

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
