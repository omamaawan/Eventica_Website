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
            <h2 class="text-center">About Us </h2>
        </div>
        <div class="container bg-danger text-white">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Vision</h2>
                    <p class="py-3">We organize events/tours for people from any walk of the life and budget. We Decide
                        the budget and make a wish list. We can cater all your needs with an immense focus on quality.
                        Our priority is to add value to our services and build trusted relationships with Clients..</p>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Mission</h2>
                    <p class="py-3">Accepting our social responsibility. our team is based
                        upon Doctors, Enginneers & Chartered Accountants
                        who are working day and night to promote tourism in
                        Pakistan. InshAllah, we will bring Eventica on top of
                        travel & Tourism Companies in Pakistan.</p>

                </div>

            </div>
        </div>
    </section>










    <footer>
        <h5 class="p-2 bg-dark text-white"> Copyright 2020 Eventica, All Right Reserved, Designed and developed by Omama
            Irshad & Ali Arman</h5>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>