@extends('layouts.main')

@section('content')
<div class="BreadCrumb">
    <div class="container" style="padding: 0 0 0 0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item"><a href="#">Data</a></li>
            </ol>
        </nav>
    </div>
</div>
</div>

<div class="Properties">
<div class="container">
    <div class="row">
        <div class="col-8 ">
            <hr class="new2">
            <div class="row" style="margin-bottom: 15px">
                <div class="col">
                    <P style="font-size: 12px">Rentals : 20</P>
                </div>
                <div class="col d-flex justify-content-end">
                    <p style="font-weight: bold; font-size: 12px">Sort By</p>
                </div>
            </div>
            <div class="row">
                @foreach ($rooms as $room)
                <div class="col">
                    <div class="card HotelCard" style="width: 21.6rem;">
                        <div class="row FeaturedProperty">
                            <div class="col FeaturedBtn">
                                FEATURES
                            </div>
                        </div>
                        <img class="card-img-top" src="/storage/post_images/{{$room->images[0]->image}}" alt="Card image cap">
                        <div class="row Price">
                            <div class="col HotelPricing">
                                <h5>${{$room->apartmentPrice}}/<small style="font-size: 15px; font-weight: bold">night</small></h5>
                            </div>
                            {{-- <div class="col Hostimg">
                                <img src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1415&q=80">
                            </div> --}}
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col CardBody">
                                        <a href="{{ URL::route('roomDetails') }}" style="color:black">
                                                <h5>{{$room->apartmentName}}</h5>
                                            </a>
                                        <p>{{$room->apartmentAddress}}</p>
                                    <div class="row RoomProperty">
                                        <div class="col-5" style="padding-right: -40px"><i class="fas fa-shower"></i> {{$room->apartmentAmenities}}</div>
                                        <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i>{{$room->apartmentRules}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="HotelStarRating">
                                            <i class="fas fa-star starcolor"></i>
                                            <i class="fas fa-star starcolor"></i>
                                            <i class="fas fa-star starcolor"></i>
                                            <i class="fas fa-star starcolor"></i>
                                            <a href="#" style="color: #949ca5">{{$room->apartmentRatings}}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>


        </div>
        <div class="col-4">
            <div class="Newsletter">
                <h6 style="margin-bottom: 30px">Newsletter Sign Up !!</h6>
                <p>Homey is a powerful booking platform that lets you run a residential or commercial rental business online with no hassle</p>
                <form>
                    <div class="form-group">

                        <input type="email" class="form-control RoomSort" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                        <button type="button" class="btn NewsletterRoomSort">Submit</button>
                    </div>
                </form>
            </div>

            <div class="FeaturedRoomSort">
                <h6 style="margin-bottom: 30px">Featured</h6>
                <div class="row">
                    <div class="col-5">
                        <img class="FeaturedImg RoomSort" src="https://images.unsplash.com/photo-1488805990569-3c9e1d76d51c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                    </div>
                    <div class="col-7">
                        <h6>Orgen Hotel</h6>
                        <p style="font-size: 12px; margin-bottom: 5px"> 4 rooms, 5 Baths</p>
                        <p style="font-size: 12px"> On califonia Road, 232, Canada</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <img class="FeaturedImg RoomSort" src="https://images.unsplash.com/photo-1488805990569-3c9e1d76d51c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                    </div>
                    <div class="col-7">
                        <h6>Orgen Hotel</h6>
                        <p style="font-size: 12px; margin-bottom: 5px"> 4 rooms, 5 Baths</p>
                        <p style="font-size: 12px"> On califonia Road, 232, Canada</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <img class="FeaturedImg RoomSort" src="https://images.unsplash.com/photo-1488805990569-3c9e1d76d51c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                    </div>
                    <div class="col-7">
                        <h6>Orgen Hotel</h6>
                        <p style="font-size: 12px; margin-bottom: 5px"> 4 rooms, 5 Baths</p>
                        <p style="font-size: 12px"> On califonia Road, 232, Canada</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <img class="FeaturedImg RoomSort" src="https://images.unsplash.com/photo-1488805990569-3c9e1d76d51c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                    </div>
                    <div class="col-7">
                        <h6>Orgen Hotel</h6>
                        <p style="font-size: 12px; margin-bottom: 5px"> 4 rooms, 5 Baths</p>
                        <p style="font-size: 12px"> On califonia Road, 232, Canada</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="section Footer">
    <div class="container">
        <div class="designedBy">
            <div class="row" style="margin-top: 30px; padding-top: 20px">
                <div class="col" style="text-align: center">
                    <p style="color: #949ca5; font-size: 12px">Homey - All rights reserved - Designed and Developed by Wavythecreator </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
