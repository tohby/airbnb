@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-7">
            <h4>Add New Room</h4>
            <div class="Badgesection">
                <div class="row insideBadge d-flex align-items-center">
                    <div class="col-2 Badgeimage">
                        <img style="width: 45px"
                            src="https://a0.muscache.com/airbnb/static/packages/config-variations-noop/icon-uc-diamond.296a9c25.gif">
                    </div>
                    <div class="col-7 insidebadge" style="padding: 3px 0 0 0">
                        <p style="margin-top: 0px">This is a rare Masami's place is usually booked.</p>
                    </div>
                </div>
            </div>
            <div class="addsection">
                <form action="{{action("RoomController@update", "$room->id" )}}" method="POST" enctype="multipart/form-data">
                    {{@method_field('PATCH')}}
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Apartment Name</label>
                            <input type="text" class="form-control myform" id="inputEmail4"
                                placeholder="Hotel Califonia" name="apartmentName" value="{{$room->apartmentName}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Apartment Address</label>
                            <input type="text" class="form-control myform" id="inputPassword4"
                                placeholder="Lagos, Nigeria" name="apartmentAddress"
                                value="{{$room->apartmentAddress}}">
                        </div>
                    </div>
                    <div class=" form-group">
                        <label for="inputState">Apartment Amenities</label>
                        <select id="Details" class="form-control myform" name="apartmentAmenities"
                            value="{{$room->apartmentAmenities}}">
                            <option selected>Select</option>
                            <option>Condo</option>
                        </select>
                    </div>
                    <div class=" form-group">
                        <label for="inputAddress2">Apartment Rules</label>
                        <input type="text" class="form-control myform" id="inputAddress2"
                            placeholder="Apartment, studio, or floor" name="apartmentRules"
                            value="{{$room->apartmentRules}}">
                    </div>
                    <div class=" form-group">
                        <label for="inputAddress2">Apartment Description</label>
                        <textarea type="text" class="form-control myform" id="inputAddress"
                            placeholder="This Room is .." style="height: 200px" name="apartmentDescription">{{$room->apartmentDescription}}</textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Price in USD</label>
                            <input type="text" class="form-control myform" id="inputCity" name="apartmentPrice"
                                value="{{$room->apartmentPrice}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Available From</label>
                            <input type="text" class="form-control myform" id="inputCity" name="apartmentAvailablefrom"
                                value="{{$room->apartmentAvailablefrom}}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Ratings</label>
                            <input type="text" class="form-control myform" id="inputZip" name="apartmentRatings"
                                value="{{$room->apartmentRatings}}">
                        </div>
                    </div>

                    <P style="margin-top: 30px">Cancellation Policy</P>
                    <p>Free cancellation for 48 hours. After that, cancel before 3:00PM on Jul 19 and get a 50% refund,
                        minus the service fee.
                        Free cancellation for 48 hours. After that, cancel before 3:00PM on Jul 19 and get a 50% refund,
                        minus the service fee.</p>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="apartmentImage[]" multiple>
                            <label class="custom-file-label" for="customFile">Choose image files</label>
                        </div>
                    <button type="submit" class="btn"
                        style="width: 120px;background: rgb(255, 90, 95) !important; color: white; margin-buttom: 50px;">Update</button>
                </form>
            </div>
        </div>
        <div class="col-4 Profile">
            <div class="ownerProfile">
                <div class="row">
                    <div class="col-8">
                        <h5 style="margin-bottom: 10px">{{ Auth::user()->name }}</h5>
                        <p style="font-size: 12px"> <i class="fas fa-medal" style="font-size: 12px; color: #F15E75"></i>
                            Edit <i class="fas fa-map-marker-alt"
                                style="margin-right: 5px; margin-left: 5px; font-size: 12px"></i>1st Avenue, New York
                        </p>
                    </div>
                    <div class="col-4">
                        <img style="width: 60px; border-radius: 360px"
                            src="https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost08-150x150.jpg">
                    </div>
                </div>
                <div class="otherInfo">
                    <h6 style="margin-top: 30px">Languages:</h6>
                    <p style="font-size: 12px">English, Yoruba, Spanish</p>
                </div>
                <div class="otherInfo">
                    <h6 style="margin-top: 30px">Bio</h6>
                    <p style="font-size: 12px"> Free cancellation for 48 hours. After that, cancel before 3:00PM on Jul
                        19 and get a 50% refund, minus the service fee. Free cancellation for 48 hours. After that,
                        cancel</p>
                </div>
                <div class="otherInfo">
                    <h6 style="margin-top: 30px">Email</h6>
                    <p style="font-size: 12px">{{ Auth::user()->email }}</p>
                </div>
                <div class="otherInfo">
                    <h6 style="margin-top: 30px">Profile Status:</h6>
                    <p style="font-size: 12px; color: green"><i class="far fa-question-circle"
                            style="font-size: 12px; color: green; margin-right: 5px"></i>Verified</p>
                </div>
                <div class="otherInfo">
                    <h6 style="margin-top: 30px">Ratings:</h6>
                    <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                    <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                    <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                    <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                    <i class="fas fa-star" style="color: orangered ; font-size: 12px"></i>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection