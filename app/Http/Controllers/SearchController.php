<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        $searchKey = $request->searchKey;
        $rooms = Room::search($searchKey)->paginate(15);
        return view('searchResults', compact('rooms'));
    }
}
