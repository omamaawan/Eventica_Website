<!DOCTYPE html>
<html>

<head>
    <tittle> </tittle>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>

<body>
    <?php session_start();
    include('nav.php');
    include('Backend/check_login.php'); ?>

    <section class="my-5">

        <div class="py-5">
            <h2 class="text-center">Upcoming Tours!! </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/ormara.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Visit beautiful beach of Balochistan</h4>
                            <p class="card-text">From RS 6,000.<br>
                                <a href="ormara.php" class="btn btn-primary">View Details!</a>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/moola.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Moola Chotok (Hidden Beauty Of Sindh)</h4>
                            <br>
                            <p class="card-text">From 7,750.<br>
                                <a href="moola.php" class="btn btn-primary">View Details!</a>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/gorakh.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Gorakh Hill Station.</h4>
                            <p class="card-text">From RS 7,000.
                                <a href="gorakh.php" class="btn btn-primary">View Details!</a>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="my-5">

        <div class="py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="images/rani.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">A Day Trip to Rani Kort Fort With Us.</h4>
                                <p class="card-text">From RS 3,500
                                    <a href="rani.php" class="btn btn-primary">View Details!</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
</body>

</html>