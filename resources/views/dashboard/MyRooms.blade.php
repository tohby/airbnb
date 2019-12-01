@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col myrooms">
            <h4>My Rooms</h4>

            <div class="addsection">
                {{-- roomstarthere --}}
                <div class="row">
                    @foreach ($rooms as $room)
                    <div class="col-4">
                        <div class="card HotelCard" style="width: 21.6rem;">
                            <div class="row FeaturedProperty">
                                <div class="col FeaturedBtn">
                                    FEATURES
                                </div>
                            </div>
                            <img class="card-img-top" src="/storage/post_images/{{$room->images[0]->image}}"
                                alt="Card image cap">
                            <div class="row Price">
                                <div class="col HotelPricing">
                                    <h5>${{$room->apartmentPrice}}/<small
                                            style="font-size: 11px; font-weight: bold">night</small></h5>
                                </div>

                            </div>

                            <div class="card-body">
                                <div class="row">
                                    {{-- @foreach($rooms as $room) --}}

                                    <div class="col CardBody">
                                        <h5>{{$room->apartmentName}}</h5>
                                        <p>{{$room->apartmentAddress}}</p>
                                        <div class="row RoomProperty">
                                            <div class="col-5" style="padding-right:-40px"><i class="fas fa-shower"></i>
                                                2 Bathrooms</div>
                                            <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3
                                                Bedroom</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="HotelStarRating" style="margin-left:-5px">
                                                    <i class="fas fa-star starcolor"></i>
                                                    <i class="fas fa-star starcolor"></i>
                                                    <i class="fas fa-star starcolor"></i>
                                                    <i class="fas fa-star starcolor"></i>
                                                    <a href="#" style="color: #949ca5">Good</a>
                                                </div>
                                            </div>
                                            <div class="col-6" style="
                                            margin-top: 5px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="{{action("RoomController@destroy", "$room->id")}}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="delete" />
                                                            <button type="submit" class="btn btn-link text-danger"><i
                                                                    class="fas fa-trash-alt"
                                                                    style="margin-right:0px"></i></button>
                                                        </form>
                                                    </div>
                                                    <div class="col" style="
                                                    padding-left: 66px;
                                                    padding-top: 8px;">
                                                        <a href="/rooms/{{$room->id}}/edit" class="text-primary"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- roomsends here  --}}
            </div>
        </div>

    </div>
</div>
@endsection
