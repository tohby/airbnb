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
                            <img class="card-img-top"
                                src="https://demo01.gethomey.io/wp-content/uploads/2018/10/15-2-750x500.jpg"
                                alt="Card image cap">
                            <div class="row Price">
                                <div class="col HotelPricing">
                                    <h5>$500/<small style="font-size: 15px; font-weight: bold">night</small></h5>
                                </div>
                                <div class="col Hostimg">
                                    <img
                                        src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1415&q=80">
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    {{-- @foreach($rooms as $room) --}}

                                    <div class="col CardBody">
                                        <h5>{{$room->apartmentName}}</h5>
                                        <p>53B, block 343, Newyork city</p>
                                        <div class="row RoomProperty">
                                            <div class="col-5" style="padding-right:-40px"><i class="fas fa-shower"></i>
                                                2 Bathrooms</div>
                                            <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3
                                                Bedroom</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="HotelStarRating" style="margin-left:-5px">
                                                    <i class="fas fa-star starcolor"></i>
                                                    <i class="fas fa-star starcolor"></i>
                                                    <i class="fas fa-star starcolor"></i>
                                                    <i class="fas fa-star starcolor"></i>
                                                    <a href="#" style="color: #949ca5">Very Good</a>
                                                </div>
                                            </div>
                                            <div class="col" style="margin:15px 0 12px 10px; padding-left: 37px;">
                                                <i class="fas fa-trash-alt" style="margin-right:15px"></i>
                                                <i class="fas fa-pencil-alt"></i>
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