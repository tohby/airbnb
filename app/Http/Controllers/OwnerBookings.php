<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Orders;

class OwnerBookings extends Controller
{
    //
    public function ownerbookings(){
        
        return view("bookings");
    }
}
