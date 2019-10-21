@extends('layouts.main')

@section('content')
<div class="jumbotron jumbotron-fluid align-items-center">
    <div class="container">
        <div class="BannerCaption">
            <h4>Book & Experience Amazing Places</h4>
            <p>WordPress Theme For Booking and Rental</p>
            <form class="HomeSearch">
                <div class="form-row justify-content-center">
                    <div class="col-3">
                        <input data-provide="datepicker" type="text" class="form-control FormSearch"
                            placeholder="Location">
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control FormSearch datepicker" placeholder="Check In">
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control FormSearch datepicker" placeholder="Check Out">
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control FormSearch" placeholder="Guests">
                    </div>
                    <div class="col-1">
                        <button type="button" class="btnHome  btn-lg">Search</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<div class="HomeContent">
    <div class="container">
        <div class="SectionTittle1">
            <h4>
                Our Featured Homes </h4>
            <p> Hand-picked selection of quality places</p>
        </div>
        <div class="row">
            <div class="col">
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
                            <div class="col CardBody">
                                <h5>Modern Apartment With Pool</h5>
                                <p>984 1st Avenue, New York, NY 10022, United</p>
                                <div class="row RoomProperty">
                                    <div class="col-5" style="padding-right:-40px"><i class="fas fa-shower"></i> 2
                                        Bathrooms</div>
                                    <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3 Bedroom
                                    </div>
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
            <div class="col">
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
                            <div class="col CardBody">
                                <h5>Modern Apartment With Pool</h5>
                                <p>984 1st Avenue, New York, NY 10022, United</p>
                                <div class="row RoomProperty">
                                    <div class="col-5" style="padding-right: -40px"><i class="fas fa-shower"></i> 2
                                        Bathrooms</div>
                                    <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3 Bedroom
                                    </div>
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
            <div class="col">
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
                            <div class="col CardBody">
                                <h5>Modern Apartment With Pool</h5>
                                <p>984 1st Avenue, New York, NY 10022, United</p>
                                <div class="row RoomProperty">
                                    <div class="col-5" style="padding-right: -40px"><i class="fas fa-shower"></i> 2
                                        Bathrooms</div>
                                    <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3 Bedroom
                                    </div>
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
            <div class="col">
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
                            <div class="col CardBody">
                                <h5>Modern Apartment With Pool</h5>
                                <p>984 1st Avenue, New York, NY 10022, United</p>
                                <div class="row RoomProperty">
                                    <div class="col-5" style="padding-right: -40px"><i class="fas fa-shower"></i> 2
                                        Bathrooms</div>
                                    <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3 Bedroom
                                    </div>
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
            <div class="col">
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
                            <div class="col CardBody">
                                <h5>Modern Apartment With Pool</h5>
                                <p>984 1st Avenue, New York, NY 10022, United</p>
                                <div class="row RoomProperty">
                                    <div class="col-5" style="padding-right: -40px"><i class="fas fa-shower"></i> 2
                                        Bathrooms</div>
                                    <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3 Bedroom
                                    </div>
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
            <div class="col">
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
                            <div class="col CardBody">
                                <h5>Modern Apartment With Pool</h5>
                                <p>984 1st Avenue, New York, NY 10022, United</p>
                                <div class="row RoomProperty">
                                    <div class="col-5" style="padding-right: -40px"><i class="fas fa-shower"></i> 2
                                        Bathrooms</div>
                                    <div class="col-5" style="margin-left: -23px"><i class="fas fa-bed"></i> 3 Bedroom
                                    </div>
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
        <div class="row justify-content-center">
            <button type="button" class="btn HomeHotelLoadmore">Load More</button>
        </div>
    </div>
    <div class="section TopDestination">
        <div class="container">
            <h4>Trending Destinations</h4>
            <p style="margin-bottom: 50px">Explore our selection of the best places around the world</p>

            <div class="row DestinationCard">
                <div class="col-6">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1533106497176-45ae19e68ba2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Miami</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1520716448897-f1cc6b0241ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Lagos</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1506059612708-99d6c258160e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1649&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Abuja</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1552399725-7744e3fda08f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Whales</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="section FindaPlace">
        <div class="container">
            <h4>Trending Destinations</h4>
            <p style="margin-bottom: 50px">Explore our selection of the best places around the world</p>

            <div class="row DestinationCard">
                <div class="col-4">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1533106497176-45ae19e68ba2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Miami</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1520716448897-f1cc6b0241ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Lagos</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1506059612708-99d6c258160e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1649&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Abuja</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1552399725-7744e3fda08f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Whales</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1552399725-7744e3fda08f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Whales</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card DestinationCard">
                        <img class="card-img Destination"
                            src="https://images.unsplash.com/photo-1552399725-7744e3fda08f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80"
                            alt="Card image">
                        <div class="card-img-overlay WhereDestination">
                            <h6>Whales</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <button type="button" class="btn HomeHotelLoadmore">Load More</button>
        </div>
    </div>
    <div class="section HeroAction">
        <div class="container">
            <div class="card " style="width: 30rem; border: none; opacity: 0.9">
                <div class="card-body HeroContent">
                    <h5 class="card-title">Rent Your Modern Apartment Out</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Starting from $79 at night</h6>
                    <p class="card-text">I am text block. Click edit button to change this text. Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit.</p>
                    <a href="/owner/register" class="btn HomeHotelLoadmore">Become a Owner</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section Partners">
        <div class="container">
            <h4>Our Partners</h4>
            <p style="margin-bottom: 50px">Explore our selection of the best places around the world</p>
            <div class="row">
                <div class="col PartnersLogoBg">
                    <!-- <img alt="#" src="#"> -->
                </div>
            </div>
        </div>
    </div>
    <div class="section Footer">
        <div class="container">
            <div class="designedBy">
                <div class="row" style="margin-top: 30px; padding-top: 20px">
                    <div class="col" style="text-align: center">
                        <p style="color: #949ca5; font-size: 12px">Homey - All rights reserved - Designed and Developed
                            by Wavythecreator </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
@endsection