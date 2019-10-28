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
                    <div class="col myrooms">
                        <h4>My Rooms</h4>

                                <div class="addsection">
                                     {{-- roomstarthere --}}
                                    <div class="row">
                                            <div class="col-4">
                                                    <div class="card HotelCard" style="width: 21.6rem;">
                                                        <div class="row FeaturedProperty">
                                                            <div class="col FeaturedBtn">
                                                                FEATURES
                                                            </div>
                                                        </div>
                                                        <img class="card-img-top" src="https://demo01.gethomey.io/wp-content/uploads/2018/10/15-2-750x500.jpg" alt="Card image cap">
                                                        <div class="row Price">
                                                            <div class="col HotelPricing">
                                                                <h5>$500/<small style="font-size: 15px; font-weight: bold">night</small></h5>
                                                            </div>
                                                            <div class="col Hostimg">
                                                                <img src="https://images.unsplash.com/photo-1506919258185-6078bba55d2a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1415&q=80">
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <div class="row">
                                                                {{-- @foreach($rooms as $room) --}}

                                                                <div class="col CardBody">
                                                                    <h5>Trump Towner Hanoi</h5>
                                                                    <p>53B, block 343, Newyork city</p>
                                                                    <div class="row RoomProperty">
                                                                        <div class="col-5" style="padding-right:-40px"><i class="fas fa-shower"></i> 2 Bathrooms</div>
                                                                        <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3 Bedroom</div>
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





                                    </div>

                                    {{-- roomsends here  --}}
                                </div>
                    </div>

                </div>
            </div>
        </section>
</body>
</html>
