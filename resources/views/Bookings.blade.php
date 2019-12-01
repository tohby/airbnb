<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Bookings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="Js/InputTags.js"></script>
</head>

<style>
@import url("https://fonts.googleapis.com/css?family=Livvic&display=swap");
body {
    padding: 0;
    margin: 0;
    overflow-x: hidden;
    background-color: #f2f3f4;
    font-family: "Avenir Next";
}

.breadcrumb {
    background-color: #f2f3f4;
    padding-left: 0px;
}

.breadcrumb-item a {
    color: black;
    margin: 0 5px 0 10px;
}

.bodycontent {
    margin-top: 90px;
}

.col-7 h4 {
    font-size: 32px;
    font-weight: bolder;
    color: #484848;
    margin-bottom: 20px;
}

.col.tablebody {
    background-color: white;
    padding: 27px;
}

.col.Tittle {
    font-weight: 600;
    font-size: 12px;
    color: rgb(31, 31, 31);
}

.col.ContentImg img {
    width: 90px;
    border-radius: 5px;
}
</style>



<body>
    <div class="Header">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Go Back Home</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="bodycontent">
        <div class="container">
            <h4 style="margin-left:10px">Bookings</h4>
            <div class="row">
                <div class="col tablebody">
                    <div class="row">
                        <div class="col Tittle">
                            Image
                        </div>
                        <div class="col Tittle">
                            Hotel Name
                        </div>
                        <div class="col Tittle">
                            Arrival Date
                        </div>
                        <div class="col Tittle">
                            Guests
                        </div>
                        <div class="col Tittle">
                            Payment
                        </div>
                        <div class="col Tittle">
                            Status
                        </div>
                    </div>
                    <!-- END OF TITTLE -->
                    <div class="row" style="
                    margin-top: 53px;">
                        <div class="col ContentImg">
                            <img src="https://images.unsplash.com/photo-1495365200479-c4ed1d35e1aa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="#" />
                        </div>
                        <div class="col ">
                            Hotel Califonia
                        </div>
                        <div class="col ">
                            12/12/2020
                        </div>
                        <div class="col ">
                            Atere Stephen Akindmola
                        </div>
                        <div class="col ">
                            $200
                        </div>
                        <div class="col Status">
                            <button type="button" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
