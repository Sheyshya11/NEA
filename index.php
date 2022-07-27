<Html>

<head>
    <title>Nepal Electricity Authority</title>

    <?php
    include("reusableScripts.php");

    ?>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>

    <?php
    include("header.php");
    ?>

    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">

                <div class="overlay-image" style="background-image:url(./img/river1.jpg) ; ">
                </div>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Nepal Electricity Authorithy.</h1>
                        <p>Nepal Electricity Authority (NEA) was created on August 16, 1985 (Bhadra 1, 2042) under the Nepal Electricity Authority Act. 1984, through the merger of the Department of Electricity of Ministry of Water Resources, Nepal Electricity Corporation and related Development Boards.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up </a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background-image:url(./img/river2.png) ; ">
                </div>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Services</h1>
                        <p>View Payment details and Billing informations.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background-image:url(./img/mountain.jpg) ; ">
                </div>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>News and Updates</h1>
                        <p>Get the recent updates on Policies and more.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse News</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- carousel
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#image1" data-slide-to="0" class="active"></li>
            <li data-target="#image2" data-slide-to="1"></li>
            <li data-target="#image3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 28em;">
            <div class="carousel-item active " data-interval="10000">
                <img src="http://4.bp.blogspot.com/-su99XYd8OYA/Tk9H_SrK2hI/AAAAAAAAAJk/GT8XRgLFepA/s1600/nepal-river.jpg" class="d-block w-100 "  alt="...">
            </div>
            <div class="carousel-item"  data-interval="10000">
                <img src="https://www.waterbynature.com/wp-content/uploads/2013/05/img_41721.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.imgur.com/llozBgv.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#image1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#image3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->






    <div class="list-group m-4 py-3 col-sm-4  ">
        <a href="displayCustomer.php" class="list-group-item list-group-item-action text-primary ">View Customers</a>
        <a href="view_branch.php" class="list-group-item list-group-item-action text-primary"> View Branches</a>
        <a href="view_demandtype.php" class="list-group-item list-group-item-action text-primary">View Demand Types</a>
        <a href="view_payment_method.php" class="list-group-item list-group-item-action text-primary">View Payment Methods</a>

    </div>


    <?php
    include("footer.php");
    ?>


</body>

</html>