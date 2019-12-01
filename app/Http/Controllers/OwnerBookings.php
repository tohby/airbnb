<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerBookings extends Controller
{
    //
    public function ownerbookings(){
        return view("bookings");
    }
}
