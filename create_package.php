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
                    <h1>Create New Package</h1>
                    <form action="Backend/do_create_package.php" method="POST">
                        <div class="form-group">
                            <label for="start_city">Start City</label>
                            <select class="form-control" name="start_city" id="start_city">
                                <option value="" selected disabled>Select Start City</option>
                                <?php $city = get_Startcity();
                                while ($city_info = mysqli_fetch_array($city)) { ?>
                                <option value="<?php echo $city_info[0]; ?>"><?php echo $city_info[1]; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tour_city">Tour City</label>
                            <select class="form-control" name="tour_city" id="tour_city">
                                <option value="" selected disabled>Select Tour City</option>
                                <?php $city = get_Startcity();
                                while ($city_info = mysqli_fetch_array($city)) { ?>
                                <option value="<?php echo $city_info[0]; ?>"><?php echo $city_info[1]; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="adult">Per-Head For Adult:</label>
                            <input type="number" class="form-control" placeholder="Per-Head For Adults" id="adult"
                                name="adult">
                        </div>

                        <div class="form-group">
                            <label for="child">Per-Head For Child:</label>
                            <input type="number" class="form-control" placeholder="Per-Head For Children" id="child"
                                name="child">
                        </div>

                        <div class="form-group">
                            <label for="tour_type">Tour Type</label>
                            <select class="form-control" name="tour_type" id="tour_type">
                                <option value="" selected disabled>Select a type</option>
                                <option value="1">Economy</option>
                                <option value="2">Special</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary " name="submit" id="submit">Create Package</button>
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