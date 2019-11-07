<?php

namespace App\Http\Controllers;

use App\User;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyRoomsController extends Controller
{
    //
    public function index(){
        return view('dashboard/myrooms');
    }
}
