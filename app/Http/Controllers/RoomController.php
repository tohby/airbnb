<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $rooms  = Room::all()->toArray();
        return view('dashboard.ViewRooms', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'apartmentName' => 'required',
            'apartmentAddress' => 'required',
            'apartmentPrice'  => 'required',
        ]);
        $room = Room::create([
            'apartmentName' => $request->input('apartmentName'),
            'apartmentAddress' => $request->input('apartmentAddress'),
            'apartmentAmenities' => $request->input('apartmentAmenities'),
            'apartmentDescription' => $request->input('apartmentDescription'),
            'apartmentRules' => $request->input('apartmentRules'),
            'apartmentPrice' => $request->input('apartmentPrice'),
            'apartmentRatings' => $request->input('apartmentRatings'),
            'apartmentAvailablefrom' => $request->input('apartmentAvailablefrom'),
            'user_id' => Auth::id(),
        ]);
        if ($request->hasfile('apartmentImage')) {
            foreach ($request->file('apartmentImage') as $image) {
                $fileNameWithExt = $image->getClientOriginalName();
                //get just file name
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                //get extension
                $extension = $image->getClientOriginalExtension();
                //filename to store
                $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
                //image upload
                $path = $image->storeAs('public/post_images', $fileNameToStore);
                $room_image = RoomImages::create([
                    'room_id' => $room->id,
                    'image' => $fileNameToStore,
                ]);
            }
        }
        return view('dashboard/ViewRooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);
        return view('dashboard.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        //
        $this->validate($request, [
            'apartmentName' => 'required',
            'apartmentAddress' => 'required',
            'apartmentPrice'  => 'required',
        ]);
        $room = Room::update([
            'apartmentName' => $request->input('apartmentName'),
            'apartmentAddress' => $request->input('apartmentAddress'),
            'apartmentAmenities' => $request->input('apartmentAmenities'),
            'apartmentDescription' => $request->input('apartmentDescription'),
            'apartmentRules' => $request->input('apartmentRules'),
            'apartmentPrice' => $request->input('apartmentPrice'),
            'apartmentRatings' => $request->input('apartmentRatings'),
            'apartmentAvailablefrom' => $request->input('apartmentAvailablefrom'),
        ]);
        if ($request->hasfile('apartmentImage')) {
            foreach ($request->file('apartmentImage') as $image) {
                $fileNameWithExt = $image->getClientOriginalName();
                //get just file name
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                //get extension
                $extension = $image->getClientOriginalExtension();
                //filename to store
                $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
                //image upload
                $path = $image->storeAs('public/post_images', $fileNameToStore);
                $room_image = RoomImages::create([
                    'room_id' => $room->id,
                    'image' => $fileNameToStore,
                ]);
            }
        }

        return view('dashboard/ViewRooms');
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
