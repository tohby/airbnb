@extends('layouts.main')

@section('content')
<div class="HotelInfo">
        <style>
           .jumbotron.gallery{
                background-image: url('/storage/post_images/{{$room->images[0]->image}}')
            }
        </style>
        <div class="jumbotron gallery">
            <div class="container">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-7 DetailsBody">
                    <div class="row FirstDetails">
                        <div class="col-9 FullDetails">
                            <nav aria-label="breadcrumb" style="margin-left: -14px">
                                <ol class="breadcrumb Details">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item"> Library</li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$room->apartmentName}}l</li>
                                </ol>
                            </nav>
                            <h5>{{$room->apartmentName}}</h5>
                            <p> <i class="fas fa-map-marker-alt" style="margin-right: 5px"></i>{{$room->apartmentAddress}}</p>
                        </div>
                        <div class="col HostPicture">
                            <img src="https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost08-150x150.jpg">
                        </div>
                    </div>
                    <hr>
                    <div class="row RoomFeatures">
                        <div class="col icon">
                            <i class="fas fa-home"></i>
                            <p>Entire Place / Apartment</p>
                        </div>
                        <div class="col icon">
                            <i class="fas fa-shower"></i>
                            <p>Entire Place / Apartment</p>
                        </div>
                        <div class="col icon">
                            <i class="fas fa-bed"></i>
                            <p>Entire Place / Apartment</p>
                        </div>
                        <div class="col icon">
                            <i class="fas fa-bath"></i>
                            <p>Entire Place / Apartment</p>
                        </div>
                    </div>
                    <hr>
                    <div class="AboutRoom">
                        <h5>About this listing</h5>
                        <p>{{$room->apartmentDescription}}</p>
                    </div>
                    <hr>
                    <div class="row RoomIndetails">
                        <div class="col IndetailsText">
                            <h6>Details</h6>
                        </div>
                        <div class="col IndetailsText">
                            <ul>
                                <li>
                                    </i>Apartment</li>
                                <li>
                                    </i>Bed</li>
                                <li>
                                    </i>Condo</li>
                                <li>
                                    </i>House</li>
                                <li>
                                    </i>Studio</li>
                            </ul>
                        </div>
                        <div class="col IndetailsText">
                            <ul>
                                <li>
                                    </i>Apartment</li>
                                <li>
                                    </i>Bed</li>
                                <li>
                                    </i>Condo</li>
                                <li>
                                    </i>House</li>
                                <li>
                                    </i>Studio</li>
                            </ul>
                        </div>
                    </div>

                </div>


                <div class="col-4 instantbooking">
                    <div class="row">
                        <div class="col PriceTittle">
                            <h4>{{$room->apartmentPrice}}/<small>night</small></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col Instantform">
                            <form action="{{action("OrdersController@store")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="date" class="form-control myform" name="arrival" placeholder="Arrival ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="date" class="form-control myform"  name="departure" placeholder="Departure">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select id="Details" name="guests" class="form-control myform">
                                        <option selected>Persons</option>
                                        <option>1 Guest</option>
                                        <option>2 Guest</option>
                                        <option>3 Guest</option>
                                        <option>4 Guest</option>
                                        <option>5 Guest</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control myform" id="inputAddress2" value="{{Auth::user()->name}}" name="mainguestName">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control myform" id="inputAddress" name="descriptions" placeholder="Description About yourself" style="height: 100px"></textarea>
                                </div>
                                <button type="submit" class="btn" style="width: 310px; height:50px; background: rgb(255, 90, 95) !important; color: white">Book Now</button>
                            </form>

                            <h6 style="margin-top:25px; font-weight: 600">Total : $0.00</h6>
                            <p style=" font-size: 12px ; margin-top: -5px">Includes taxes and fees</p>
                        </div>

                        <div class="SocialShareRooms">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-google-plus-g"></i>
                            <i class="fab fa-linkedin-in"></i>
                            <i class="fab fa-pinterest"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row Hostinfo">
            <div class="col-7 HostinfoStart">
                <div class="row">
                    <div class="col-2 HostPictureInfo">
                        <img src="https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost08-150x150.jpg">
                    </div>
                    <div class="col HostName">
                        <h5>{{$room->user->name}}</h5>
                        <p style="font-size: 12px"> <i class="fas fa-medal" style="font-size: 12px; color: #F15E75"></i> Gold <i class="fas fa-map-marker-alt" style="margin-right: 5px; margin-left: 5px; font-size: 12px"></i>984 1st Avenue, New York</p>
                    </div>
                </div>
                <hr>
                <div class="row" style="margin-top: 30px">
                    <div class="col">
                        <h5 style="font-size: 14px">Contact</h5>
                    <p style="font-size: 12px">{{$room->user->email}}</p>
                    </div>
                    <div class="col">
                        <h5 style="font-size: 14px">Profile Status</h5>
                        <p style="font-size: 12px; color: green"><i class="far fa-question-circle" style="font-size: 12px; color: green; margin-right: 5px"></i>Verified</p>
                    </div>
                    <div class="col">
                        <h5 style="font-size: 14px">Host Ratings</h5>
                        <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                        <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                        <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                        <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                        <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="row SimilarRooms">
            <div class="col-7 SimilarRooms">
                <div class="row">
                    <div class="col-6 SimilarHotelImg">
                        <img src="https://demo01.gethomey.io/wp-content/uploads/2018/10/01-5-750x500.jpg">
                    </div>
                    <div class="col SimilarRoomsDetails">
                        <h6 style="font-size: 16px">{{$room->apartmentName}}</h6>
                        <p style="font-size: 14px">{{$room->apartmentAddress}}</p>

                        <div class="row RoomProperty">
                            <div class="col-5" style="padding-right: -40px"><i class="fas fa-shower"></i> 2 Bathrooms</div>
                            <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3 Bedroom</div>
                        </div>
                        <div class="row">
                            <div class="HotelStarRating">
                                <i class="fas fa-star starcolor"></i>
                                <i class="fas fa-star starcolor"></i>
                                <i class="fas fa-star starcolor"></i>
                                <i class="fas fa-star starcolor"></i>
                                <a href="#" style="color: #949ca5">Very Good</a>
                            </div>
                        </div>
                    </div>
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
@endsection
