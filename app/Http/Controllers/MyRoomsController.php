<?php

namespace App\Http\Controllers;

use App\User;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyRoomsController extends Controller
{
    //
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('dashboard/myrooms')->with('rooms', $user->rooms);
    }

    public function usersRooms()
    {
        $rooms = Room::get();
        return view('index')->with('rooms', $rooms);
    }
    public function RoomsSort()
    {
        $rooms = Room::get();
        return view('Sortroom')->with('rooms', $rooms);
    }

    public function roomDetails()
    {
        $rooms = Room::get();
        $featured = featured::orderByRaw('RAND()')->take(1)->get();
        return view('roomDetails')->with('rooms', $rooms);
    }
}
