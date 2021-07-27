<!DOCTYPE html>
<html>

<head>
    <tittle> </tittle>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
        integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />


</head>

<body>
    <?php
    session_start();
    include('nav.php');
    include('Backend/check_login.php');
    include_once("Backend/cfg.php");
    // include('carousel.php');
    ?>

    <section class="my-5 make-yr-frm">
        <div class="container" style="align-items: center;">
            <div class="Customize">
                <div class="col-md-10">
                    <h1>Make Your Own Trip</h1>
                    <form action="Backend/do_customize.php" method="POST">
                        <?php

                        ?>
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username"
                                value="<?php echo ucwords($_SESSION['user_name']); ?>" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email"
                                value="<?php echo $_SESSION['user_email']; ?>" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="text" class="form-control" placeholder="Enter phone number"
                                value="<?php echo $_SESSION['user_mobile']; ?>" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="startDate">Start Date:</label>
                            <input type="date" class="form-control" placeholder="Enter Start Date" id="startDate"
                                name="startDate">
                        </div>
                        <div class="form-group">
                            <label for="endDate">End Date:</label>
                            <input type="date" class="form-control" placeholder="Enter End Date" id="endDate"
                                name="endDate">
                        </div>
                        <div class="form-group">
                            <label for="NumberOfAdults">Number Of Adults:</label>
                            <input type="number" class="form-control" placeholder="Enter Number Of Adults" id="adults"
                                name="adults">
                        </div>
                        <div class="form-group">
                            <label for="NumberOfChildren">Number Of Children (3 to 10 years):</label>
                            <input type="number" class="form-control" placeholder="Enter Number Of Children"
                                id="children" name="children">
                        </div>
                        <!-- <div class="form-group">
                            <label for="Number Of Infants">Number Of Infants(0 to 3 years):</label>
                            <input type="text" class="form-control" placeholder="Enter Number Of of Infants"
                                id="infants">
                        </div> -->
                        <div class="form-group">
                            <label for="startCity">Start City</label>
                            <!-- <input type="text" class="form-control" placeholder="karachi" id="startCity" name="startCity"> -->
                            <select class="form-control" name="startCity" id="startCity">
                                <option value="" selected disabled>Select Start City</option>
                                <?php
                                $city = get_Startcity();
                                while ($city_info = mysqli_fetch_array($city)) {
                                ?>
                                <option value="<?php echo $city_info[0]; ?>"><?php echo $city_info[1]; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tourCity">Tour City</label>
                            <!-- <input type="text" class="form-control" placeholder="Naran" id="tourCity" name="tourCity"> -->
                            <select class="form-control" name="tourCity" id="tourCity">
                                <option value="" selected disabled>Select Tour City</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="TourType">Tour Type</label>
                            <select class="form-control" name="tour_type" id="tour_type">
                                <option value="" selected disabled>Select a type</option>
                                <option value="1">Economy</option>
                                <option value="2">Special</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary " name="submit" id="submit">Plan Mine</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h3>Contact Us</h3>
            <address>
                Gmail <a href="info@eventica.pk">info@eventica.pk</a>.<br>
                Follow us on insta <a href="https://instagram.com/eventica_pk?igshid=18ojymjabyr4c">Insta</a>.<br>
                Follow us on Facebook<a href="https://www.facebook.com/EventicaPk/">Facebook</a>.<br>
                <p>WhatsApp at: 0333-5960661</p>
            </address>
        </div>

    </section>

    <footer>
        <h5 class="p-2 bg-dark text-white"> Copyright 2020 Eventica, All Right Reserved, Designed and developed by Omama
            Irshad & Ali Arman</h5>
    </footer>


</body>
<script type="text/javascript">
$(document).ready(function() {

    // $(".startCity").change(function() {
    //     var id = $(this).val();
    //     var dataString = 'id=' + id;

    //     $.ajax({
    //         type: "POST",
    //         url: "Backend/get_tourCity.php",
    //         data: dataString,
    //         cache: false,
    //         success: function(html) {
    //             $(".tourCity").html(html);
    //         }
    //     });
    // });
    $('#startCity').on('change', function() {
        var startCityID = $(this).val();
        if (startCityID) {
            console.log(startCityID);
            $.ajax({
                type: 'POST',
                url: 'Backend/get_tourCity.php',
                data: 'startCityID=' + startCityID,
                success: function(html) {
                    $('#tourCity').html(html);
                }
            });
        } else {
            $('#tourCity').html('<option value="">Select Start City first</option>');
        }
    });
    // $('select').selectize({
    //     sortField: 'text'
    // });
});
</script>

</html>