<?php

namespace App;

use App\RoomImages;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Room extends Model
{
    use Searchable;

    protected $table = 'rooms';
    protected $fillable = [
        'apartmentName', 'apartmentAddress', 'apartmentAmenities', 'apartmentDescription', 'apartmentRules', 'apartmentPrice', 'apartmentRatings', 'apartmentAvailablefrom', 'apartmentImage', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\RoomImages');
    }
    public function orders()
    {
        return $this->hasMany('App\Orders');
    }
    public function searchableAs()
    {
        return 'apartmentName';
    }
}
