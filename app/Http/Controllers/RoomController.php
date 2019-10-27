<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $room = new Room();
        $room->apartmentName = $request->input(apartmentName);
        $room->apartmentAddress = $request->input(apartmentAddress);
        $room->apartmentAmenities = $request->input(apartmentAmenities);
        $room->apartmentDescription = $request->input(apartmentDescription);
        $room->apartmentRules = $request->input(apartmentRules);
        $room->apartmentPrice = $request->input(apartmentPrice);
        $room->apartmentRatings = $request->input(apartmentRatings);
        $room->apartmentAvailablefrom = $request->input(apartmentAvailablefrom);

        if ($request->hasfile('apartmentImage')) {
            $file = $request->file('apartmentImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/highlights/', $filename);
            $room->image = $filename;
        } else {
            return $request;
            $room->image = '';
        }
        $room->save();
        return view('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
