@section('content')
    <html lang="en">>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 70%;
                margin: auto;
            }
        </style>
    </head>
    <body>
    <div class="row">
        <div class="text-center medium-12 large-12 columns">
            <div class="text-center medium-2  columns">DESCRIPTION FOR:</div>
            <div class="text-center medium-2  columns"><br>
                Room Name :  {{$room->name}} <b>
                    Floor Number:  {{$room->floor}}
                </b></div>
        </div>
    <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" ></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                <img src="photos/{{$room_id}}/1.jpg" alt="" width="460" height="345">

                </div>
                <div class="item">
                    <img src="photos/{{$room_id}}/2.jpg" alt="">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

                <br>
        <div align = "center">
                <label for="story">Room Furnishings:</label>
<br>
                <textarea placeholder="noticeboard" rows="20" cols="30">
                   {{$room->description}}
                </textarea>
                <br>
                <br>
                <div class="text-center map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202.46378332655263!2d51.40103260224281!3d35.71587481363931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e07b9f3628ae1%3A0x1e7f937adee8cbac!2sFarhang%20Azma%20Communications%20Co!5e0!3m2!1sen!2suk!4v1576660729894!5m2!1sen!2suk" width="500" height="500" frameborder="50" style="border:30;" allowfullscreen=""></iframe>
                </div>
        </div>
    </body>
    </html>

@yield('footer')