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
        <div class="container">
            <div  class="Customize">
                <div class="col-md-6">
                    <h1>Total Cost for the Package</h1><br>
                    <table align = "center" class="table">


                        <tr>
                        <td colspan="3" align = "center">Tour Package </td>
                        <?php 

                            // get the name of user's start city
                            $rows = get_userStartCity($_SESSION['start_City']);

                        ?>
                            <td align = "center">
                                
                            <!-- display user's start city -->
                            <?php echo $rows['city'];

                            // get the name of user's tour city
                            $rows = get_userTourCity($_SESSION['tour_City']);

                            ?>

                            <!-- display user's tour city -->                            
                            - <?php echo $rows['city'] ?></td>
                        </tr>

                        <tr>
                        <td colspan = "3" align = "center">Duration</td>
                        <td align = "center"><?php echo $_SESSION['start_Date'] ?> -  <?php echo $_SESSION['end_Date'] ?></td>
                        </tr>
                        
                        <tr>
                        <td colspan="4"  align = "center" style= "font-weight:bold">PRICE</td>
                        </tr>

                        <tr>
                        <td align = "center">Adult(s)</td>
                        <td align = "right"><?php echo $_SESSION['adult'] ?> </td>
                        <td align = "right">X</td>
                        <td align = "center"><?php echo $_SESSION['adult_pr'] ?></td>
                        </tr>

                        <tr>
                        <td align = "center">Children</td>
                        <td align = "right"><?php echo $_SESSION['children'] ?> </td>
                        <td align = "right">X</td>
                        <td align = "center"><?php echo $_SESSION['child_pr'] ?></td>
                        </tr>

                        <tr>
                        <td colspan = "3" style= "font-weight:bold" align = "center">Total Price</td>
                        <td style= "font-weight:bold" align = "center"><?php echo $_SESSION['total'] ?></td>
                        </tr>
                      
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
           <!--  <h3>Contact Us</h3>
            <address>
                 Gmail <a href="info@eventica.pk">info@eventica.pk</a>.<br>
                Follow us on insta <a href="https://instagram.com/eventica_pk?igshid=18ojymjabyr4c">Insta</a>.<br>
                Follow us on Facebook<a href="https://www.facebook.com/EventicaPk/">Facebook</a>.<br>
                <p>WhatsApp at: 0333-5960661</p>
            </address>-->
        </div>

    </section> <br><br>

    <footer>
        <h5 class="p-2 bg-dark text-white"> Copyright 2020 Eventica, All Right Reserved, Designed and developed by Omama
            Irshad & Ali Arman</h5>
    </footer>


</body>

</html>