<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{ asset('css/homey.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="Js/InputTags.js"></script>

    <title>Homey.com</title>
</head>
<body>
        <div class="Header">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Add New Room</a></li>
                        <li class="breadcrumb-item"><a href="#">View Orders</a></li>
                        <li class="breadcrumb-item"><a href="#">Profile</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="bodycontent">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <h4>Add New Room</h4>
                        <div class="Badgesection">
                            <div class="row insideBadge d-flex align-items-center" >
                                <div class="col-2 Badgeimage">
                                    <img style="width: 45px" src="https://a0.muscache.com/airbnb/static/packages/config-variations-noop/icon-uc-diamond.296a9c25.gif">
                                </div>
                                <div class="col-7 insidebadge"style="padding: 3px 0 0 0">
                                    <p style="margin-top: 0px">This is a rare  Masami's place is usually booked.</p>
                                </div>
                            </div>
                        </div>
                        <div class="addsection">
                            <form action="{{action("DashboardController@store")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Apartment Name</label>
                                        <input type="text" class="form-control myform" id="inputEmail4" placeholder="Hotel Califonia" name="apartmentName">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Apartment Address</label>
                                        <input type="text" class="form-control myform" id="inputPassword4" placeholder="Lagos, Nigeria" name="apartmentAddress">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Apartment Amenities</label>
                                    <select id="Details" class="form-control myform" name="apartmentAmenities">
                                        <option selected>Select</option>
                                        <option>Condo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Apartment Rules</label>
                                    <input type="text" class="form-control myform" id="inputAddress2" placeholder="Apartment, studio, or floor" name="apartmentRules">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Apartment Description</label>
                                    <textarea type="text" class="form-control myform" id="inputAddress" placeholder="This Room is .." style="height: 200px" name="apartmentDescription"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Price in USD</label>
                                        <input type="text" class="form-control myform" id="inputCity" name="apartmentPrice">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Available From</label>
                                        <input type="text" class="form-control myform" id="inputCity" name="apartmentAvailablefrom">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Ratings</label>
                                        <input type="text" class="form-control myform" id="inputZip" name="apartmentRatings">
                                    </div>
                                </div>

                                <P style="margin-top: 30px">Cancellation Policy</P>
                                <p>Free cancellation for 48 hours. After that, cancel before 3:00PM on Jul 19 and get a 50% refund, minus the service fee.
                                    Free cancellation for 48 hours. After that, cancel before 3:00PM on Jul 19 and get a 50% refund, minus the service fee.</p>
                                    <input type="file" class="btn" style="width: 120px;background: rgb(255, 90, 95) !important; color: white; margin-buttom: 50px;" name="apartmentImage">
                                <button type="submit" class="btn" style="width: 120px;background: rgb(255, 90, 95) !important; color: white; margin-buttom: 50px;">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-4 Profile">
                        <div class="ownerProfile">
                            <div class="row">
                                <div class="col-8">
                                  <h5 style="margin-bottom: 10px">{{ Auth::user()->name }}</h5>
                                    <p style="font-size: 12px"> <i class="fas fa-medal" style="font-size: 12px; color: #F15E75"></i>  Edit  <i class="fas fa-map-marker-alt" style="margin-right: 5px; margin-left: 5px; font-size: 12px"></i>1st Avenue, New York</p>
                                </div>
                                <div class="col-4" >
                                   <img style="width: 60px; border-radius: 360px" src="https://demo01.gethomey.io/wp-content/uploads/2018/10/HomeyHost08-150x150.jpg">
                                </div>
                            </div>
                            <div class="otherInfo">
                                <h6 style="margin-top: 30px">Languages:</h6>
                                <p style="font-size: 12px">English, Yoruba, Spanish</p>
                            </div>
                            <div class="otherInfo">
                                <h6 style="margin-top: 30px">Bio</h6>
                                <p style="font-size: 12px"> Free cancellation for 48 hours. After that, cancel before 3:00PM on Jul 19 and get a 50% refund, minus the service fee. Free cancellation for 48 hours. After that, cancel</p>
                            </div>
                            <div class="otherInfo">
                                <h6 style="margin-top: 30px">Email</h6>
                                <p style="font-size: 12px">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="otherInfo">
                                <h6 style="margin-top: 30px">Profile Status:</h6>
                                <p style="font-size: 12px; color: green"><i class="far fa-question-circle" style="font-size: 12px; color: green; margin-right: 5px"></i>Verified</p>
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
        </section>
</body>
</html>
