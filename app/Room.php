<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = [
        'apartmentName', 'apartmentAddress', 'apartmentAmenities', 'apartmentDescription', 'apartmentRules', 'apartmentPrice', 'apartmentRatings', 'apartmentAvailablefrom', 'apartmentImage', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
